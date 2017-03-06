<?php
/* @var $this EpisodeController */
/* @var $data Episode */
?>

<div class="view grid-thumbnails">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('episode_name')); ?>:</b>
	<?php echo CHtml::encode($data->episode_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?>:</b>
	<?php echo CHtml::encode($data->thumbnail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poster')); ?>:</b>
	<?php echo CHtml::encode($data->poster); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actor')); ?>:</b>
	<?php echo CHtml::encode($data->actor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
	<?php echo CHtml::encode($data->director); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />
	<b><?php echo CHtml::link('View Detail',$this->createAbsoluteUrl('episode/details/'.$data->id)); ?></b>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('season_id')); ?>:</b>
	<?php echo CHtml::encode($data->season_id); ?>
	<br />

	*/ ?>

</div>