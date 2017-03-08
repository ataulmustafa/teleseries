<?php
/* @var $this EpisodeActorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Episode Actors',
);

$this->menu=array(
	array('label'=>'Create EpisodeActors', 'url'=>array('create')),
	array('label'=>'Manage EpisodeActors', 'url'=>array('admin')),
);
?>

<h1>Episode Actors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
