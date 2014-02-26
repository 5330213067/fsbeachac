<?php
/* @var $this PromotionController */
/* @var $model Promotion */

$this->breadcrumbs=array(
	'Promotions'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Promotion', 'url'=>array('index')),
);
?>

<h1>Promotion >> <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		array(
		'name'=>'description',
		'type'=>'html', // show text from html format
		'value'=>$model->description,
),
		'start_date',
		'end_date',
	),
)); ?>
