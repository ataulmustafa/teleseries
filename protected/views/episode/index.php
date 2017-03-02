<?php
/* @var $this EpisodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Episodes',
);

$this->menu=array(
	array('label'=>'Create Episode', 'url'=>array('create')),
	array('label'=>'Manage Episode', 'url'=>array('admin')),
);
?>

<h1>Episodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
