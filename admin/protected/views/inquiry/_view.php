<?php
/* @var $this InquiryController */
/* @var $data Inquiry */
?>

<div class="view">
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('in_date')); ?>:</b>
	<?php echo CHtml::encode($data->in_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('msg')); ?>:</b>
	<?php $msg = CHtml::encode($data->msg);
	echo $data['msg'];
	//echo CHtml::encode($data->msg); 

?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('num_of_player')); ?>:</b>
	<?php echo CHtml::encode($data->num_of_player); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('member_id')); ?>:</b>
	<?php $mem = Member::model()->findByPK($data->member_id);
				echo '<b>Name:<b> '.$mem['name'].'<br>';
				echo '<b>Phone:<b> '.$mem['phone'].'<br>';
				echo '<b>Email:<b> '.$mem['email'].'<br>';
				echo '<b>Address:<b> '.$mem['address'].'<br>'; ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('activity_id')); ?>:</b>
	<?php echo CHtml::encode($data->activity_id); ?>
	<br />

	*/ ?>

</div>