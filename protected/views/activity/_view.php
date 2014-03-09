<?php
/* @var $this ActivityController */
/* @var $data Activity */
?>

<div class="view">
	
	<div class = 'act-img' style = "width: 400px; float: left;"><?php echo CHtml::image(Yii::app()->request->baseUrl.'/admin/images/activity/'.$data->img,'img',array('width'=>390,'height'=>250)); ?> </div>
	<div class = 'act-detail' style = "height: 250px;">
		<div class = 'act-detail-top' style=" height: 225px;">
		
		<b>
		<?php echo '<h1>'.CHtml::encode($data->name).'</h1>'; ?>

		<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
		<?php echo CHtml::encode($data->location); ?>
		<br />
		
		<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
		<?php echo CHtml::encode($data->description); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
		<?php echo CHtml::encode($data->price); ?>
		<br />

		<b><?php echo CHtml::encode($data->getAttributeLabel('promotion_id')); ?>:</b>
		<?php   $pro = Promotion::model()->findByPK($data->promotion_id);
				echo $pro['name'];
		?>
		<br />
		</div>
		<div class="row buttons" style="float: right;">
		<?php echo CHtml::link('Inquiry',array('site/Inquiry',
                                         'id'=>$data->id)); ?>
		</div>
		
	</div>
	 

	

	

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	*/ ?>

</div>