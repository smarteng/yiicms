<?php
/* @var $this ArticlesController */
/* @var $model Articles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'articles-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'channelid'); ?>
		<?php echo $form->textField($model,'channelid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'channelid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cate'); ?>
		<?php echo $form->DropDownList($model,'cate',CHtml::listData(Cate::model()->findAll(),'sid','sortname'));?>
		<?php echo $form->error($model,'cate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hits'); ?>
		<?php echo $form->textField($model,'hits',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'hits'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'posttime'); ?>
		<?php echo $form->textField($model,'posttime',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'posttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picid'); ?>
		<?php echo $form->textField($model,'picid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'picid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'picpath'); ?>
		<?php echo $form->textField($model,'picpath',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'picpath'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php
			$this->widget('ext.dxheditor.DxhEditor',array(
				'model'=>$model,
				'attribute' => 'content',
				'htmlOptions' => array('style'=>'width:100%;height:600px;'),
                'options' =>array('tools'=>'simple'),
		));?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tag'); ?>
		<?php echo $form->textField($model,'tag',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'tag'); ?>
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
		<?php echo $form->labelEx($model,'langid'); ?>
		<?php echo $form->textField($model,'langid',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'langid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->