	<script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='scripts/jquery.hoverIntent.minified.js'></script> 
	<script type='text/javascript' src='scripts/diapo.js'></script> 
	
	<script>
	$(function(){
		$('.pix_diapo').diapo();
	});
	</script>
<?php
/* @var $this PromotionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Promotions',
);

// $this->menu=array(
// 	array('label'=>'Create Promotion', 'url'=>array('create')),
// 	array('label'=>'Manage Promotion', 'url'=>array('admin')),
// );
?>

<h1>Promotions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
