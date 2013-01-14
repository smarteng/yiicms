<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'channels-form',
    //'type'=>'horizontal',
    'enableAjaxValidation'=>false,
)); 
?>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->dropDownListRow($model, 'pid', CHtml::listData(Channels::model()->findAll('pid=0'),'id','title')); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'channeltype'); ?>
		<?php echo $form->textField($model,'channeltype'); ?>
		<?php echo $form->error($model,'channeltype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'systemtype'); ?>
		<?php echo $form->textField($model,'systemtype'); ?>
		<?php echo $form->error($model,'systemtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ordernum'); ?>
		<?php echo $form->textField($model,'ordernum',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ordernum'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ishidden'); ?>
		<?php echo $form->textField($model,'ishidden'); ?>
		<?php echo $form->error($model,'ishidden'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'positions'); ?>
		<?php echo $form->textField($model,'positions',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'positions'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seotitle'); ?>
		<?php echo $form->textField($model,'seotitle',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'seotitle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metakeywords'); ?>
		<?php echo $form->textField($model,'metakeywords',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metakeywords'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'metadesc'); ?>
		<?php echo $form->textField($model,'metadesc',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'metadesc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'link'); ?>
		<?php echo $form->textField($model,'link',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'link'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'target'); ?>
		<?php echo $form->textField($model,'target'); ?>
		<?php echo $form->error($model,'target'); ?>
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