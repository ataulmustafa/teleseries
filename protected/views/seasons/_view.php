<?php
/* @var $this SeasonsController */
/* @var $data Seasons */
?>

<div class="view grid-thumbnails">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_name')); ?>:</b>
	<?php echo CHtml::encode($data->season_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_number')); ?>:</b>
	<?php echo CHtml::encode($data->season_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_series_number')); ?>:</b>
	<?php echo CHtml::encode($data->season_series_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('season_description')); ?>:</b>
	<?php echo CHtml::encode($data->season_description); ?>
	<br />


</div>