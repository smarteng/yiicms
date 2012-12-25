<?php
/* @var $this SettingsController */
/* @var $model Settings */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'settings-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryid'); ?>
		<?php echo $form->textField($model,'categoryid'); ?>
		<?php echo $form->error($model,'categoryid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'property'); ?>
		<?php echo $form->textField($model,'property',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'property'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'setvalue'); ?>
		<?php echo $form->textField($model,'setvalue',array('size'=>60,'maxlength'=>1000)); ?>
		<?php echo $form->error($model,'setvalue'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'langid'); ?>
		<?php echo $form->textField($model,'langid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'langid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->