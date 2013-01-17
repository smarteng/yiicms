<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'channels-form',
    'type'=>'horizontal',
    'htmlOptions'=>array('class'=>'well'),
    'enableAjaxValidation'=>false,
)); 
?>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>
<?php echo $form->errorSummary($model); ?>

<?php echo $form->dropDownListRow($model, 'pid',$model->getPidOptions()); ?>
<?php echo $form->dropDownListRow($model, 'channeltype', $model->getTypeOptions()); ?>
<?php echo $form->textFieldRow($model, 'ordernum'); ?>
<?php echo $form->radioButtonListInlineRow($model, 'ishidden', array(1=>'是',0=>'否')); ?>
<?php echo $form->checkBoxListInlineRow($model, 'positions', array(1=>'顶部',2=>'底部')); ?>
<?php echo $form->textFieldRow($model, 'alias', array('class'=>'input-xlarge')); ?>
<?php echo $form->textFieldRow($model, 'title', array('class'=>'input-xlarge')); ?>

  <div class="control-group">
	<?php echo $form->labelEx($model,'content',array('class'=>'control-label')); ?>
	<div class="controls">
	<?php
		$this->widget('ext.dxheditor.DxhEditor',array(
			'model'=>$model,
			'attribute' => 'content',
			'htmlOptions' => array('style'=>'width:100%;height:150px;'),
            'options' =>array('tools'=>'simple'),
	));?>
	</div>
	<?php echo $form->error($model,'content'); ?>
</div>
 <?php echo $form->textFieldRow($model, 'seotitle', array('class'=>'input-xlarge')); ?>
 <?php echo $form->textFieldRow($model, 'metakeywords', array('class'=>'input-xlarge')); ?>
 <?php echo $form->textFieldRow($model, 'metadesc', array('class'=>'input-xlarge')); ?>
 <?php echo $form->textFieldRow($model, 'link', array('hint'=>'可以是(\'product/new\', \'tag\'=>\'new\')这种连接','hintOptions'=>array('class'=>'help-inline'))); ?>
 <?php echo $form->radioButtonListInlineRow($model, 'target', array(1=>'是',0=>'否')); ?>
 
<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>