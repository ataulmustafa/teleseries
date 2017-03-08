<?php
/* @var $this EpisodeActorsController */
/* @var $model EpisodeActors */

$this->breadcrumbs=array(
	'Episode Actors'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EpisodeActors', 'url'=>array('index')),
	array('label'=>'Create EpisodeActors', 'url'=>array('create')),
	array('label'=>'Update EpisodeActors', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EpisodeActors', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EpisodeActors', 'url'=>array('admin')),
);
?>

<h1>View EpisodeActors #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'episode_id',
		'actor_id',
	),
)); ?>
