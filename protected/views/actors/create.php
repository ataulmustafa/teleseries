<?php
/* @var $this ActorsController */
/* @var $model Actors */

$this->breadcrumbs=array(
	'Actors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Actors', 'url'=>array('index')),
	array('label'=>'Manage Actors', 'url'=>array('admin')),
);
?>

<h1>Create Actors</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>