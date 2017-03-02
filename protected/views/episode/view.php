<?php
/* @var $this EpisodeController */
/* @var $model Episode */

$this->breadcrumbs=array(
	'Episodes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Episode', 'url'=>array('index')),
	array('label'=>'Create Episode', 'url'=>array('create')),
	array('label'=>'Update Episode', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Episode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Episode', 'url'=>array('admin')),
);
?>

<h1>View Episode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'episode_name',
		'thumbnail',
		'poster',
		'actor',
		'director',
		'description',
	),
)); ?>
