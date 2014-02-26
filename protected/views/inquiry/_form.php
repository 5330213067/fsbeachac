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
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo '<h1>'.$item->name.'</h1>'; ?>
	<div class="row">
		<?php echo $form->labelEx($model,'msg'); ?>
		<?php 

	$this->widget('ext.editMe.widgets.ExtEditMe', array(
    		//'name'=>'major',
    		//'value'=>'put your template code here',
    		'attribute'=>'msg',
			'model'=>$model,
));
?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_of_player'); ?>
		<?php echo $form->textField($model,'num_of_player',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'num_of_player'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(
		
				'attribute'=>'date',
		
				'model'=>$model,
		
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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->