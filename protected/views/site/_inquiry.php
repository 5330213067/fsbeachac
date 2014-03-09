	<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
	<script type='text/javascript' src='scripts/diapo.js'></script> 
<?php
/* @var $this InquiryController */
/* @var $model Inquiry */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inquiry-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); 

?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php if (Yii::app()->session['id'] =="") {
		echo $form->errorSummary(array($Member,$Inquiry));?>
		<div class="row">
				<?php echo $form->labelEx($Member,'name'); ?>
				<?php echo $form->textField($Member,'name',array('size'=>20,'maxlength'=>45)); ?>
				<?php echo $form->error($Member,'name'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($Member,'phone'); ?>
				<?php echo $form->textField($Member,'phone',array('size'=>10,'maxlength'=>10)); ?>
				<?php echo $form->error($Member,'phone'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($Member,'email'); ?>
				<?php echo $form->textField($Member,'email',array('size'=>20,'maxlength'=>45)); ?>
				<?php echo $form->error($Member,'email'); ?>
			</div>
		
			<div class="row">
				<?php echo $form->labelEx($Member,'address'); ?>
				<?php echo $form->textArea($Member,'address',array('rows'=>6, 'cols'=>50)); ?>
				<?php echo $form->error($Member,'address'); ?>
			</div>
		<div class="row">
		<?php echo $form->labelEx($Inquiry,'msg'); ?>
		<?php 

	$this->widget('ext.editMe.widgets.ExtEditMe', array(
    		//'name'=>'major',
    		//'value'=>'put your template code here',
    		'attribute'=>'msg',
			'model'=>$Inquiry,
));
?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Inquiry,'num_of_player'); ?>
		<?php echo $form->textField($Inquiry,'num_of_player',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($Inquiry,'num_of_player'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Inquiry,'date'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		
				'attribute'=>'date',
		
				'model'=>$Inquiry,
		
				'options' => array(
		
						'dateFormat'=>'yy-mm-dd',
		
						'changeMonth'=>true,
		
						'changeYear'=>true,
		
				),
		)		
		);
		?>

	</div>
		<div class="row buttons">
		<?php echo CHtml::submitButton($Member->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
		
<?php 	}else{
		echo $form->errorSummary(array($Inquiry));?>
		<?php echo '<h1>'.$item->name.'</h1>'; ?>
	<div class="row">
		<?php echo $form->labelEx($Inquiry,'msg'); ?>
		<?php 

	$this->widget('ext.editMe.widgets.ExtEditMe', array(
    		//'name'=>'major',
    		//'value'=>'put your template code here',
    		'attribute'=>'msg',
			'model'=>$Inquiry,
));
?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Inquiry,'num_of_player'); ?>
		<?php echo $form->textField($Inquiry,'num_of_player',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($Inquiry,'num_of_player'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($Inquiry,'date'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		
				'attribute'=>'date',
		
				'model'=>$Inquiry,
		
				'options' => array(
		
						'dateFormat'=>'yy-mm-dd',
		
						'changeMonth'=>true,
		
						'changeYear'=>true,
		
				),
		)		
		);
		?>

	</div>
	
	<div class="row buttons">
		<?php echo CHtml::submitButton($Inquiry->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
	<?php }  ?>

	

<?php $this->endWidget(); ?>

</div><!-- form -->