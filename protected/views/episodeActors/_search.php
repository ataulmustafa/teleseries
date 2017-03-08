<?php
/* @var $this EpisodeActorsController */
/* @var $model EpisodeActors */
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
		<?php echo $form->label($model,'episode_id'); ?>
		<?php echo $form->textField($model,'episode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'actor_id'); ?>
		<?php echo $form->textField($model,'actor_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->