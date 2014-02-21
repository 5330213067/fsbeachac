<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property integer $member_id
 *
 * The followings are the available model relations:
 * @property Member $member
 */
class User extends CActiveRecord
{
	public $repeat_password;
	public $initialPassword;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('password, repeat_password', 'required', 'on'=>'insert'),
			array('password, repeat_password', 'length', 'min'=>6, 'max'=>20),
			array('password', 'compare', 'compareAttribute'=>'repeat_password'),
			array('username, password', 'required'),
			array('member_id', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>45),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, username, password, member_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'member' => array(self::BELONGS_TO, 'Member', 'member_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'username' => 'Username',
			'password' => 'Password',
			'member_id' => 'Member',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('member_id',$this->member_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function beforeSave()
	{
		// in this case, we will use the old hashed password.
		if(empty($this->password) && empty($this->repeat_password) && !empty($this->initialPassword))
			$this->password=$this->repeat_password=$this->initialPassword;
	
		return parent::beforeSave();
	}
	
	public function afterFind()
	{
		//reset the password to null because we don't want the hash to be shown.
		$this->initialPassword = $this->password;
		$this->password = null;
	
		parent::afterFind();
	}
	public function saveModel($data=array())
	{
		//because the hashes needs to match
		if(!empty($data['password']) && !empty($data['repeat_password']))
		{
			$data['password'] = Yii::app()->user->hashPassword($data['password']);
			$data['repeat_password'] = Yii::app()->user->hashPassword($data['repeat_password']);
		}
	
		$this->attributes=$data;
	
		if(!$this->save())
			return CHtml::errorSummary($this);
	
		return true;
	}
	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
