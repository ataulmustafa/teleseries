<?php
/* @var $this EpisodeController */
/* @var $model Episode */

$this->breadcrumbs=array(
	'Episodes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Episode', 'url'=>array('index')),
	array('label'=>'Create Episode', 'url'=>array('create')),
	array('label'=>'View Episode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Episode', 'url'=>array('admin')),
);
?>

<h1>Update Episode <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>