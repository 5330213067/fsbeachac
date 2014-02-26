<?php
/* @var $this PromotionController */
/* @var $model Promotion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'promotion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	<link rel="stylesheet" href="/extension/redactor/redactor.css" />

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
<?php 

	$this->widget('ext.editMe.widgets.ExtEditMe', array(
    		//'name'=>'major',
    		//'value'=>'put your template code here',
    		'attribute'=>'description',
			'model'=>$model,
));
?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'start_date'); 
		$this->widget('zii.widgets.jui.CJuiDatePicker', array(

			'attribute'=>'start_date', 

            'model'=>$model,

            'options' => array(

                     	'dateFormat'=>'yy-mm-dd', 

						'changeMonth'=>true,

						'changeYear'=>true,

						),

    

             )

		);?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'end_date'); 
				$this->widget('zii.widgets.jui.CJuiDatePicker', array(

			'attribute'=>'end_date', 

            'model'=>$model,

            'options' => array(

                     	'dateFormat'=>'yy-mm-dd', 

						'changeMonth'=>true,

						'changeYear'=>true,

						),

    

             )

		);?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->