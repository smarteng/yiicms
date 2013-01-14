<?php /** @var BootActiveForm $form */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'articles-form',
    //'type'=>'horizontal',
    'enableAjaxValidation'=>false,
)); 
?>
	<p class="note">带有<span class="required">*</span> 的项目为必填项</p>

	<?php echo $form->errorSummary($model); ?>

<?php echo $form->dropDownListRow($model, 'channelid', CHtml::listData(Channels::model()->findAll('channeltype=2'),'id','title')); ?>
<?php echo $form->dropDownListRow($model, 'cate', CHtml::listData(Cate::model()->findAll(),'sid','sortname')); ?>
<?php echo $form->textFieldRow($model, 'title', array('class'=>'input-xxlarge')); ?>
<div class="row">
	<?php echo $form->labelEx($model,'content'); ?>
	<?php
		$this->widget('ext.dxheditor.DxhEditor',array(
			'model'=>$model,
			'attribute' => 'content',
			'htmlOptions' => array('style'=>'width:100%;height:500px;'),
            'options' =>array('tools'=>'simple'),
	));?>
	<?php echo $form->error($model,'content'); ?>
</div>
<?php echo $form->textFieldRow($model, 'tag', array('class'=>'input-xxlarge')); ?>
<?php echo $form->textFieldRow($model, 'seotitle', array('class'=>'input-xxlarge')); ?>
<?php echo $form->textFieldRow($model, 'metakeywords', array('class'=>'input-xxlarge')); ?>

<div class="row">
	<?php echo $form->labelEx($model,'metadesc'); ?>
	<?php
		$this->widget('ext.dxheditor.DxhEditor',array(
			'model'=>$model,
			'attribute' => 'metadesc',
			'htmlOptions' => array('style'=>'width:100%;height:200px;'),
            'options' =>array('tools'=>'simple'),
	));?>
	<?php echo $form->error($model,'metadesc'); ?>
</div>

<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>

<?php $this->endWidget(); ?>
