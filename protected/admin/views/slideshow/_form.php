<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'slideshow-form',
    'type'=>'horizontal',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); 
?>
<fieldset>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->textFieldRow($model, 'title', array('class'=>'input-xxlarge')); ?>
<?php echo $form->textFieldRow($model, 'url', array('class'=>'input-xxlarge')); ?>
<?php echo $form->fileFieldRow($model, 'image'); ?>
<?php echo $form->dropDownListRow($model, 'token', $model->getTypeOptions()); ?>
<?php echo $form->textFieldRow($model, 'sortnum', array('class'=>'input-xxlarge')); ?>

</fieldset>

<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>
