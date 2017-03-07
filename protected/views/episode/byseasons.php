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
    'Episodes'=>array('index'),
//    $model->id,
);

$this->menu=array(
    array('label'=>'List Episodes', 'url'=>array('index')),
    array('label'=>'Create Episode', 'url'=>array('create')),
//    array('label'=>'Update Seasons', 'url'=>array('update', 'id'=>$model->id)),
//    array('label'=>'Delete Seasons', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Episodes', 'url'=>array('admin')),
);


//print_r($model);exit;
for ($i=0; $i<count($model);$i++){
?>
    <div class="view grid-thumbnails">

        <?php echo CHtml::image(dirname(Yii::app()->request->baseUrl).DIRECTORY_SEPARATOR.'teleseries/' . $model[$i]['poster'], 'POSTER IMAGE'); ?>
        <br />

        <b>Episode Name:</b>
        <?php echo CHtml::encode($model[$i]['episode_name']); ?>
        <br />

        <b><?php echo CHtml::link('View Detail',$this->createAbsoluteUrl('episode/details/'.$model[$i]['id'])); ?></b>
    </div>
<?php
}
?>
