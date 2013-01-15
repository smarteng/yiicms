<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'cate-form',
    'type'=>'horizontal',
    'enableAjaxValidation'=>false,
   // 'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); 
?>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>
<?php echo $form->errorSummary($model); ?>
<?php echo $form->textFieldRow($model, 'sortname', array('class'=>'input-xxlarge')); ?>
<?php echo $form->textFieldRow($model, 'alias', array('class'=>'input-xlarge')); ?>
<?php echo $form->textFieldRow($model, 'taxis', array('class'=>'input-xlarge')); ?>
<?php echo $form->textFieldRow($model, 'keywords', array('class'=>'input-xlarge')); ?>
 <div class="control-group">
	<?php echo $form->labelEx($model,'description',array('class'=>'control-label')); ?>
	<div class="controls">
	<?php
		$this->widget('ext.dxheditor.DxhEditor',array(
			'model'=>$model,
			'attribute' => 'description',
			'htmlOptions' => array('style'=>'width:100%;height:150px;'),
            'options' =>array('tools'=>'simple'),
	));?>
	</div>
	<?php echo $form->error($model,'description'); ?>
</div>

<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>
