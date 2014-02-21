<?php
/* @var $this MemberController */
/* @var $model Member */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'member-form',
		
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary(array($Member,$User)); ?>
	
	<div class="row">
		<?php echo $form->labelEx($User,'username'); ?>
		<?php echo $form->textField($User,'username',array('size'=>10,'maxlength'=>45)); ?>
		<?php echo $form->error($User,'username'); ?>
	</div>
	
	<section>
        <?php echo $form->labelEx($User,'password'); ?>
        <div>
            <?php echo $form->passwordField($User,'password',array('maxlength'=>20)); ?>
            <?php echo $form->labelEx($User,'repeat_password'); ?>
            <?php echo $form->passwordField($User,'repeat_password',array('maxlength'=>20)); ?>
        </div>
        <?php echo $form->error($User,'password'); ?>
    </section>
	
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($Member->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->