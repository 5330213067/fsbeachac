<?php
/* @var $this InquiryController */
/* @var $model Inquiry */

$this->breadcrumbs=array(
	'Inquiries'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Inquiry', 'url'=>array('index')),
	array('label'=>'Create Inquiry', 'url'=>array('create')),
	array('label'=>'View Inquiry', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Inquiry', 'url'=>array('admin')),
);
?>

<h1>Update Inquiry <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>