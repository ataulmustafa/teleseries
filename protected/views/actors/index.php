<?php
/* @var $this ActorsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actors',
);

$this->menu=array(
	array('label'=>'Create Actors', 'url'=>array('create')),
	array('label'=>'Manage Actors', 'url'=>array('admin')),
);
?>

<h1>Actors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
