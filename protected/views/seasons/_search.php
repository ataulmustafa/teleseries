<?php
/* @var $this SeasonsController */
/* @var $model Seasons */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'season_name'); ?>
		<?php echo $form->textField($model,'season_name',array('size'=>60,'maxlength'=>180)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'season_number'); ?>
		<?php echo $form->textField($model,'season_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'season_series_number'); ?>
		<?php echo $form->textField($model,'season_series_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'season_description'); ?>
		<?php echo $form->textField($model,'season_description',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->