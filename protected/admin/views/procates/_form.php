<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'procates-form',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
    'enableAjaxValidation'=>false,
)); 
?>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>
<?php echo $form->errorSummary($model); ?>
<?php echo $form->dropDownListRow($model, 'pid',$model->getPidOptions()); ?>
 <?php echo $form->textFieldRow($model, 'ordernum'); ?>
<?php echo $form->radioButtonListInlineRow($model, 'ishidden', array(1=>'是',0=>'否')); ?>
<?php echo $form->textFieldRow($model, 'alias'); ?>
<?php echo $form->textFieldRow($model, 'title', array('class'=>'input-xlarge')); ?>
<?php echo $form->textFieldRow($model, 'seotitle', array('class'=>'input-xlarge')); ?>
<?php echo $form->textFieldRow($model, 'metakeywords', array('class'=>'input-xlarge')); ?>
<?php echo $form->textFieldRow($model, 'metadesc', array('class'=>'input-xlarge')); ?>
 
<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>