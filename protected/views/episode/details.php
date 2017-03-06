<?php
/* @var $this EpisodeController */
/* @var $data Episode */
$this->breadcrumbs=array(
	'Episodes'=>array('index'),
//    $model->id,
);

$this->menu=array(
	array('label'=>'List Episodes', 'url'=>array('index')),
	array('label'=>'Create Episode', 'url'=>array('create')),
//    array('label'=>'Update Seasons', 'url'=>array('update', 'id'=>$model->id)),
//    array('label'=>'Delete Seasons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Episodes', 'url'=>array('admin')),
);
?>
<h1>Episode Details</h1>
<div class="view">


<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('poster')); ?><!--:</b>-->
	<?php echo CHtml::image(dirname(Yii::app()->request->baseUrl).DIRECTORY_SEPARATOR.'teleseries/images/poster_large.png', 'POSTER IMAGE'); ?>
	<br />
	<br />
	<br />


<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?><!--:</b>-->
	<?php echo CHtml::image(dirname(Yii::app()->request->baseUrl).DIRECTORY_SEPARATOR.'teleseries/' . $data->thumbnail, 'THUMBNAIL IMAGE'); ?>
	<br />
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('episode_name')); ?>:</b>
	<?php echo CHtml::encode($data->episode_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('actor')); ?>:</b>
	<?php for($i=0;$i<count($data->actors);$i++){
	            if($i) echo ', ';
	            echo CHtml::encode($data->actors[$i]->attributes['actor_name']);
	        }  ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
	<?php echo CHtml::encode($data->director); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('season_id')); ?>:</b>
	<?php echo CHtml::encode($data->season_id); ?>
	<br />

	*/ ?>

</div>