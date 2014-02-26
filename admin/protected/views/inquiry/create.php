<?php
/* @var $this InquiryController */
/* @var $model Inquiry */

$this->breadcrumbs=array(
	'Inquiries'=>array('index'),
	'Create',
);
$this->menu=array(
	array('label'=>'List Inquiry', 'url'=>array('index')),
	array('label'=>'Manage Inquiry', 'url'=>array('admin')),
);
?>

<h1>Create Inquiry</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>