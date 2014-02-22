<?php
/* @var $this InquiryController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tour',
);

/* $this->menu=array(
	array('label'=>'Create Inquiry', 'url'=>array('create')),
	array('label'=>'Manage Inquiry', 'url'=>array('admin')),
); */
?>
<h1>Tours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
