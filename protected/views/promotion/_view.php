<?php
/* @var $this PromotionController */
/* @var $data Promotion */
?>

<div class="view">

	<?php echo  '<h3>'.CHtml::link($data->name,array('promotion/view',
                                         'id'=>$data->id)).'</h3>'; ?>

	<?php echo $data->description; ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('start_date')); ?>:</b>
	
	<?php echo 'Form '.$data->start_date.'  to  '.$data->end_date;?>
	<br />

</div>