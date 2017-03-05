<?php
/**
 * Created by PhpStorm.
 * User: Atas
 * Date: 3/4/2017
 * Time: 11:03 PM
 */
/* @var $this SeasonsController */
/* @var $model Seasons */

$this->breadcrumbs=array(
    'Seasons'=>array('index'),
//    $model->id,
);

$this->menu=array(
    array('label'=>'List Seasons', 'url'=>array('index')),
    array('label'=>'Create Seasons', 'url'=>array('create')),
//    array('label'=>'Update Seasons', 'url'=>array('update', 'id'=>$model->id)),
//    array('label'=>'Delete Seasons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Seasons', 'url'=>array('admin')),
);



foreach ($model as $data){
?>
    <div class="view grid-thumbnails">

        <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('season_name')); ?>:</b>
        <?php echo CHtml::encode($data->season_name); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('season_number')); ?>:</b>
        <?php echo CHtml::encode($data->season_number); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('season_series_number')); ?>:</b>
        <?php echo CHtml::encode($data->season_series_number); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('season_description')); ?>:</b>
        <?php echo CHtml::encode($data->season_description); ?>
        <br />

        <b><?php echo CHtml::link('View Episodes','../../episode/byseasons/'.$data->id); ?></b>

    </div>
<?php
}
?>
