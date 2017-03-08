<?php
/* @var $this ActorsController */
/* @var $data Actors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actor_name')); ?>:</b>
	<?php echo CHtml::encode($data->actor_name); ?>
	<br />


</div>