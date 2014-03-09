<?php
/* @var $this InquiryController */
/* @var $model Inquiry */

$this->breadcrumbs=array(
	'Inquiries'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Inquiry', 'url'=>array('index')),
	array('label'=>'Create Inquiry', 'url'=>array('create')),
	array('label'=>'Update Inquiry', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Inquiry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Inquiry', 'url'=>array('admin')),
);
?>
<h1>View Inquiry #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'in_date',
		array(
		'name'=>'msg',
		'type'=>'html', // show text from html format
		'value'=>$model->msg,
		),
		'num_of_player',
		'date',
		'status',
		'member.name',
		'member.email',
		'member.phone',
		'member.address',
		'activity.name',
	),
)); ?>
