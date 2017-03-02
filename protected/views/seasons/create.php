<?php
/* @var $this SeasonsController */
/* @var $model Seasons */

$this->breadcrumbs=array(
	'Seasons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Seasons', 'url'=>array('index')),
	array('label'=>'Manage Seasons', 'url'=>array('admin')),
);
?>

<h1>Create Seasons</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>