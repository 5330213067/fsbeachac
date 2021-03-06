<?php
/* @var $this InquiryController */
/* @var $model Inquiry */
/* @var $form CActiveForm */
?>
<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'in_date'); ?>
		<?php echo $form->textField($model,'in_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'msg'); ?>
		<?php echo $form->textArea($model,'msg',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'num_of_player'); ?>
		<?php echo $form->textField($model,'num_of_player',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date'); ?>
		<?php echo $form->textField($model,'date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'member_id'); ?>
		<?php echo $form->textField($model,'member_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'activity_id'); ?>
		<?php echo $form->textField($model,'activity_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->