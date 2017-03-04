<?php
/* @var $this SeriesController */
/* @var $data Series */
?>

<div class="view grid-thumbnails">
<?php #print_r($data); ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series_name')); ?>:</b>
	<?php echo CHtml::encode($data->series_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_by')); ?>:</b>
	<?php echo CHtml::encode($data->created_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('series_description')); ?>:</b>
	<?php echo CHtml::encode($data->series_description); ?>
	<br />

    <b><?php echo CHtml::link('View seasons','../seasons/byseries/'.$data->id); ?></b>

</div>