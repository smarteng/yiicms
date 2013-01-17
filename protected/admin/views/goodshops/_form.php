<?php 
/* @var $this GoodshopsController */
/* @var $model Goodshops */
/* @var $form CActiveForm */

$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'goodshops-form',
    'type'=>'horizontal',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data','class'=>'well'),
));
?>
<fieldset>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>
<?php echo $form->errorSummary($model); ?>
<?php echo $form->textFieldRow($model, 'name'); ?>
<?php echo $form->fileFieldRow($model, 'logo'); ?>
<?php if($model->logo){ ?>
<div class="control-group ">
	<div class="controls">
		<img src="<?php echo Yii::app()->baseUrl . $model->logo ?>" height="100"/>
	</div>
</div>
<?php } ?>
<?php echo $form->textFieldRow($model, 'tags'); ?>
<?php echo $form->textFieldRow($model, 'nick'); ?>
<?php echo $form->textFieldRow($model, 'url'); ?>
 <?php echo $form->textAreaRow($model, 'description', array('class'=>'span8', 'rows'=>5)); ?>
 
 </fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>