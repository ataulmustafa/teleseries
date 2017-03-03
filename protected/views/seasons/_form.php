<?php
/* @var $this SeasonsController */
/* @var $model Seasons */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seasons-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'season_name'); ?>
		<?php echo $form->textField($model,'season_name',array('size'=>60,'maxlength'=>180)); ?>
		<?php echo $form->error($model,'season_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'season_number'); ?>
		<?php echo $form->textField($model,'season_number'); ?>
		<?php echo $form->error($model,'season_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'season_series_number'); ?>
		<?php echo $form->textField($model,'season_series_number'); ?>
		<?php echo $form->error($model,'season_series_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'season_description'); ?>
		<?php echo $form->textField($model,'season_description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'season_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->