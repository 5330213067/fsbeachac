<?php
/* @var $this InquiryController */
/* @var $model Inquiry */

$this->breadcrumbs=array(
	'Inquiries',
	'Create',
);
/* $this->menu=array(
	array('label'=>'List Inquiry', 'url'=>array('index')),
	array('label'=>'Manage Inquiry', 'url'=>array('admin')),
); */
?>

<h1>Inquiry</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'item'=>$item)); ?>