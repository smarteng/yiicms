<?php
/* @var $this CateController */
/* @var $model Cate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cate-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'sortname'); ?>
		<?php echo $form->textField($model,'sortname',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'sortname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'taxis'); ?>
		<?php echo $form->textField($model,'taxis'); ?>
		<?php echo $form->error($model,'taxis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'keywords'); ?>
		<?php echo $form->textField($model,'keywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'keywords'); ?>
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