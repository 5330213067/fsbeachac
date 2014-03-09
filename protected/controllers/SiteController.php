<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index');
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-Type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
public function actionRegister(){
		$Member = new Member;
		$User = new User;
		
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Member'], $_POST['User']))
		{
			$User->attributes=$_POST['User'];
			$Member->attributes=$_POST['Member'];
				
			$valid=$User->validate();
			$valid=$Member->validate() && $valid;
				
			if($valid)
			{
				// use false parameter to disable validation
				$User->save(false);
				
				$Member->save(false);
		
				// ...redirect to another page
				//$this->redirect(array('create'));
			}
			
			$User->member_id = $Member->id;
			$User->type = 'M';
			if($Member->save() && $User->save())
				$this->redirect(array('site/login'));
		}
		
		$this->render('register',array(
				'Member'=>$Member,
				'User'=>$User
		));
	}
	
	public function actionLocation()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('location');
	}
	public function actionInquiry($id){
		if (Yii::app()->session['id'] == ""){
		$Inquiry = new Inquiry;
		$Member = new Member;
	
		$item = Activity::model()->findByPK($id);

	
		if(isset($_POST['Member'], $_POST['Inquiry']))
		{
			$Inquiry->attributes=$_POST['Inquiry'];
			$Member->attributes=$_POST['Member'];

			$valid=$Inquiry->validate();
			$valid=$Member->validate() && $valid;
			
			if($valid)
			{
				// use false parameter to disable validation
				$Inquiry->save(false);
	
				$Member->save(false);
	
				// ...redirect to another page
				//$this->redirect(array('create'));
			}
			
			$Inquiry->in_date = date('Y-m-d H:i:s');
			$Inquiry->status = 'N';
			$Inquiry->activity_id = $id;
			
			$criteria = new CDbCriteria();
			$criteria->condition  = "id=:id and statut='1'";
			$criteria->order = "orderField DESC";
			$criteria->limit = 1;
			
			$model=Member::model()->findAllBySql('SELECT id FROM member ORDER BY id DESC LIMIT 1');
			foreach ($model as $mid){
				$Inquiry->member_id =$mid->id+1;
			}
			//print_r($model['id']);
			if($Member->save() && $Inquiry->save()){
				
				$this->redirect(array('activity/index'));
			}
		}
	
		$this->render('_inquiry',array(
				'Member'=>$Member,
				'Inquiry'=>$Inquiry,
				'item'=>$item,
		));
	}else{
		$Inquiry = new Inquiry;
		
		$item = Activity::model()->findByPK($id);
		
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		if(isset($_POST['Inquiry']))
		{
			$Inquiry->attributes=$_POST['Inquiry'];
			$Inquiry->in_date = date('Y-m-d H:i:s');
			$Inquiry->status = 'N';
			$Inquiry->activity_id = $id;
			
			$uid =Yii::app()->session['id'];
			
				
			$model=Member::model()->findAllBySql('SELECT member.id FROM member join user on user.member_id = member.id where user.id ='.$uid);
			foreach ($model as $mid){
				$Inquiry->member_id =$mid->id;
			}
			//$Inquiry->member_id = Yii::app()->session['id'];
			if($Inquiry->save())
				$this->redirect(array('activity/index'));
		}
		
		$this->render('_inquiry',array(
				'Inquiry'=>$Inquiry,
				'item'=>$item,
		));
		}
	}
	
}