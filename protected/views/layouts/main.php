<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel='stylesheet' id='style-css'  href='diapo.css' type='text/css' media='all'> 
	<script type='text/javascript' src='scripts/jquery.min.js'></script>
	<!--[if !IE]><!--><script type='text/javascript' src='scripts/jquery.mobile-1.0rc2.customized.min.js'></script><!--<![endif]-->
	<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
	<script type='text/javascript' src='scripts/diapo.js'></script> 
	<script>
	$(function(){
		$('.pix_diapo').diapo();
	});
	</script>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div style="height:85px; margin-top:40px;">
			<div style="float:left;">
				<div style="positin:absolute;">
					<a style="cursor:pointer; position:absolute; top:20px;"><img src="images/logo.png" /></a>
				</div>
			</div>
			<div style="float:right;">
				<div>
					<a style="cursor:pointer; margin:5px 5px 5px 5px;"><img src="images/u4_normal.png" width="45px" height="45px"/></a>
					<a style="cursor:pointer; margin:5px 5px 5px 5px;"><img src="images/u6_normal.png" width="45px" height="45px"/></a>
				</div>
				
			</div>
		</div>
		<!--   <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div> -->
	</div><!-- header -->

	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'id'=>'1',
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Tour', 'url'=>array('/site/')),
				array('label'=>'Activity', 'url'=>array('/site/')),
				array('label'=>'Location', 'url'=>array('/site/')),
				array('label'=>'Register', 'url'=>array('/site/register'), 'visible'=>Yii::app()->user->isGuest),
				/*array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),*/
				/*array('label'=>'Contact', 'url'=>array('/site/contact')),*/

				array('label'=>'Sign in', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'rigtmenu')),
				array('label'=>'Logout', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest, 'itemOptions'=>array('class'=>'rigtmenu'))
			),
		));
 ?>
		
	</div>
	<div id="u0_img" >
				
				
				<div style="overflow:hidden; width:960px; margin-left: -5px; padding:0 0px;"> 
			    	<div class="pix_diapo">
			        	<div data-thumb="images/thumbs/bananaboat.jpg">
			            <img src="images/slides/bananaboat.jpg">
			            	<div class="caption elemHover fromLeft">
			                Promotion I
			            	</div>
			        	</div>
			        	<div data-thumb="images/thumbs/parashu.jpg">
			            <img src="images/slides/parashu.jpg">
			            	<div class="caption elemHover fromLeft">
			                Promotion II
			            	</div>
			        	</div>
			        	<div data-thumb="images/thumbs/skii.jpg">
			            <img src="images/slides/ski.jpg">
			            	<div class="caption elemHover fromLeft">
			                Promotion III
			            	</div>
			        	</div>
			        	<div data-thumb="images/thumbs/bananaboat2.jpg">
			            <img src="images/slides/bananaboat.jpg">
			            	<div class="caption elemHover fromLeft">
			                Promotion IV
			            	</div>
			        	</div>
			        	<div data-thumb="images/thumbs/servee.jpg">
			            <img src="images/slides/serve.jpg">
			            	<div class="caption elemHover fromLeft">
			                Promotion V
			            	</div>
			        	</div>
			    	</div>
			    </div>
				

	</div>
	<!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
