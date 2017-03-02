<?php
/* @var $this SeasonsController */
/* @var $model Seasons */

$this->breadcrumbs=array(
	'Seasons'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Seasons', 'url'=>array('index')),
	array('label'=>'Create Seasons', 'url'=>array('create')),
	array('label'=>'View Seasons', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Seasons', 'url'=>array('admin')),
);
?>

<h1>Update Seasons <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>