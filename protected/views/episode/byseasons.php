<h1>Episodes</h1>
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
    array('label'=>'List Episodes', 'url'=>array('index')),
    array('label'=>'Create Episode', 'url'=>array('create')),
//    array('label'=>'Update Seasons', 'url'=>array('update', 'id'=>$model->id)),
//    array('label'=>'Delete Seasons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Episodes', 'url'=>array('admin')),
);



foreach ($model as $data){
?>
    <div class="view grid-thumbnails">

        <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
        <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('episode_name')); ?>:</b>
        <?php echo CHtml::encode($data->episode_name); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('thumbnail')); ?>:</b>
        <?php echo CHtml::encode($data->thumbnail); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('poster')); ?>:</b>
        <?php echo CHtml::encode($data->poster); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('actor')); ?>:</b>
        <?php echo CHtml::encode($data->actor); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('director')); ?>:</b>
        <?php echo CHtml::encode($data->director); ?>
        <br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
        <?php echo CHtml::encode($data->description); ?>
        <br />


    </div>
<?php
}
?>
