<?php
/* @var $this SeasonsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Seasons',
);

$this->menu=array(
	array('label'=>'Create Seasons', 'url'=>array('create')),
	array('label'=>'Manage Seasons', 'url'=>array('admin')),
);
?>

<h1>Seasons</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
