<?php
/* @var $this EpisodeController */
/* @var $model Episode */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'episode-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'episode_name'); ?>
		<?php echo $form->textField($model,'episode_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'episode_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'thumbnail'); ?>
		<?php echo $form->textField($model,'thumbnail',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'thumbnail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'poster'); ?>
		<?php echo $form->textField($model,'poster',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'poster'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'actor'); ?>
		<?php echo $form->textField($model,'actor',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'actor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'director'); ?>
		<?php echo $form->textField($model,'director',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'director'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->