<?php
/* @var $this EpisodeActorsController */
/* @var $data EpisodeActors */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('episode_id')); ?>:</b>
	<?php echo CHtml::encode($data->episode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actor_id')); ?>:</b>
	<?php echo CHtml::encode($data->actor_id); ?>
	<br />


</div>