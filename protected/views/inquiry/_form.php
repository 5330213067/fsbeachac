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

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'in_date'); ?>
		<?php echo $form->textField($model,'in_date'); ?>
		<?php echo $form->error($model,'in_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'msg'); ?>
		<?php echo $form->textArea($model,'msg',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'msg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_of_player'); ?>
		<?php echo $form->textField($model,'num_of_player',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'num_of_player'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
		<?php echo $form->error($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'member_id'); ?>
		<?php echo $form->textField($model,'member_id'); ?>
		<?php echo $form->error($model,'member_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'activity_id'); ?>
		<?php echo $form->textField($model,'activity_id'); ?>
		<?php echo $form->error($model,'activity_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->