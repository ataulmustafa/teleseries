<?php
/* @var $this EpisodeActorsController */
/* @var $model EpisodeActors */

$this->breadcrumbs=array(
	'Episode Actors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EpisodeActors', 'url'=>array('index')),
	array('label'=>'Manage EpisodeActors', 'url'=>array('admin')),
);
?>

<h1>Create EpisodeActors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>