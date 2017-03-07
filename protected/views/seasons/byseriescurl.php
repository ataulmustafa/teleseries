<h1>Seasons</h1>
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

for($i=0; $i<count($model);$i++){
?>
    <div class="view grid-thumbnails">

        <b>Season Name:</b>
        <?php echo $model[$i]['season_name']; ?>
        <br />

        <b>Season Number:</b>
        <?php echo $model[$i]['season_number']; ?>
        <br />

        <b>Season Series Number:</b>
        <?php echo $model[$i]['season_series_number']; ?>
        <br />

        <b>Season Description:</b>
        <?php echo $model[$i]['season_description']; ?>
        <br />

        <b><?php echo CHtml::link('View Episodes',$this->createAbsoluteUrl('episode/byseasons/'.$model[$i]['id'])); ?></b>

    </div>
<?php
}
?>
