<?php
/* @var $this SeasonsController */
/* @var $model Seasons */

$this->breadcrumbs=array(
	'Seasons'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Seasons', 'url'=>array('index')),
	array('label'=>'Create Seasons', 'url'=>array('create')),
	array('label'=>'Update Seasons', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Seasons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Seasons', 'url'=>array('admin')),
);
?>

<h1>View Seasons #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'season_name',
		'season_number',
		'season_series_number',
		'season_description',
	),
)); ?>
