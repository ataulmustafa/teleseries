<?php
/* @var $this ActorsController */
/* @var $model Actors */

$this->breadcrumbs=array(
	'Actors'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Actors', 'url'=>array('index')),
	array('label'=>'Create Actors', 'url'=>array('create')),
	array('label'=>'View Actors', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Actors', 'url'=>array('admin')),
);
?>

<h1>Update Actors <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>