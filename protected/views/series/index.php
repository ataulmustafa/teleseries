<?php
/* @var $this SeriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Series',
);

$this->menu=array(
	array('label'=>'Create Series', 'url'=>array('create')),
	array('label'=>'Manage Series', 'url'=>array('admin')),
);
?>

<h1>Series</h1>

<!--<div class="form">-->
<!--	--><?php //$form=$this->beginWidget('CActiveForm', array(
//		'action'=>array('site/login'),
//		'id'=>'login-form',
//	)); ?>
<!---->
<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($loginForm,'username'); ?>
<!--		--><?php //echo $form->textField($loginForm,'username'); ?>
<!--		--><?php //echo $form->error($loginForm,'username'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($loginForm,'password'); ?>
<!--		--><?php //echo $form->passwordField($loginForm,'password'); ?>
<!--		--><?php //echo $form->error($loginForm,'password'); ?>
<!--		<p class="hint">-->
<!--			Hint: You may login with <tt>demo/demo</tt> or <tt>admin/admin</tt>.-->
<!--		</p>-->
<!--	</div>-->
<!---->
<!--	<div class="row rememberMe">-->
<!--		--><?php //echo $form->checkBox($loginForm,'rememberMe'); ?>
<!--		--><?php //echo $form->label($loginForm,'rememberMe'); ?>
<!--		--><?php //echo $form->error($loginForm,'rememberMe'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row buttons">-->
<!--		--><?php //echo CHtml::submitButton('Login'); ?>
<!--	</div>-->
<!---->
<!--	--><?php //$this->endWidget(); ?>
<!--</div>-->
<!-- form -->

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
