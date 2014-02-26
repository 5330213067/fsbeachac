<?php
/* @var $this MemberController */
/* @var $model Member */

$this->breadcrumbs=array(
	'Members'=>array('index'),
	'Sign Up',
);

?>

<h1>Sign Up</h1>

<?php $this->renderPartial('_form', array('Member'=>$Member, 'User'=>$User)); ?>
