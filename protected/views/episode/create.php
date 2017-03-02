<?php
/* @var $this EpisodeController */
/* @var $model Episode */

$this->breadcrumbs=array(
	'Episodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Episode', 'url'=>array('index')),
	array('label'=>'Manage Episode', 'url'=>array('admin')),
);
?>

<h1>Create Episode</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>