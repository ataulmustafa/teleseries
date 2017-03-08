<?php
/* @var $this EpisodeActorsController */
/* @var $model EpisodeActors */

$this->breadcrumbs=array(
	'Episode Actors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EpisodeActors', 'url'=>array('index')),
	array('label'=>'Create EpisodeActors', 'url'=>array('create')),
	array('label'=>'View EpisodeActors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EpisodeActors', 'url'=>array('admin')),
);
?>

<h1>Update EpisodeActors <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>