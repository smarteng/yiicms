<?php
/* @var $this ProductController */
/* @var $model Products */
/* @var $form CActiveForm */
$form = $this->beginWidget('bootstrap.TbActiveForm', array(
    'id'=>'products-form',
    'type'=>'horizontal',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data','class'=>'well'),
)); 
?>
<fieldset>
<p class="note">带有<span class="required">*</span> 的项目为必填项</p>
 <?php echo $form->errorSummary($model); ?>
<?php echo $form->dropDownListRow($model, 'pid', 
	CHtml::listData(Procates::model()->findAll('pid=0'),'id','title'),
	array(
		'ajax' => array(
		'type'=>'POST', //request type
		'url'=>CController::createUrl('procates/subcate'), //url to call.
		'update'=>'#Products_cid', //selector to update
		//'data'=>'js:javascript statement' 
		)
)
); ?>
<?php echo $form->dropDownListRow($model, 'cid', array('empty'=>'请选择')); ?>
 <div class="control-group">
	<?php echo $form->labelEx($model,'picpaths',array('class'=>'control-label')); ?>
	<div class="controls">
	<?php
		$this->widget('CMultiFileUpload', array(
                'name' => 'picpaths',
                'model'=>$model,
     			'attribute'=>'picpaths',
                'accept' => 'jpeg|jpg|png', // useful for verifying files
                'duplicate' => '重复图片!', // useful, i think
                'denied' => '请上传指定类型', // useful, i think
                'max'=>5,
               /* 'options'=>array(
			        'onFileSelect'=>'function(e, v, m){ alert("onFileSelect - "+v) }',
			        'afterFileSelect'=>'function(e, v, m){ alert("afterFileSelect - "+v) }',
			        'onFileAppend'=>'function(e, v, m){ alert("onFileAppend - "+v) }',
			        'afterFileAppend'=>'function(e, v, m){ alert("afterFileAppend - "+v) }',
			        'onFileRemove'=>'function(e, v, m){ alert("onFileRemove - "+v) }',
			        'afterFileRemove'=>'function(e, v, m){ alert("afterFileRemove - "+v) }',
			     ),*/
        ));
    ?>
    <p class="help-block">可选择多个图片文件，最多5个。</p>
	</div>
	<?php echo $form->error($model,'picpaths'); ?>
</div>
<?php if($model->picpaths){ ?>
<div class="control-group ">
	<div class="controls">
		<?php 
			$pics = explode(',', $model->picpaths);
			foreach ($pics as $key => $value) {
				echo '<img src="'.Yii::app()->baseUrl.$value.'" height="60" width="60"/> &nbsp;&nbsp;';
			}
		?>
	</div>
</div>
<?php } ?>
<?php echo $form->textFieldRow($model, 'picids', array('hint'=>'如果填写这个可以不上传图片，代码自动抓取','hintOptions'=>array('class'=>'help-inline'))); ?>

<?php echo $form->dropDownListRow($model, 'type', $model->getTypeOptions()); ?>
 <?php echo $form->textFieldRow($model, 'name', array('class'=>'input-xxlarge')); ?>
 <?php echo $form->textFieldRow($model, 'serialnum', array('class'=>'input-xxlarge')); ?>
 <?php echo $form->textFieldRow($model, 'seotitle', array('class'=>'input-xxlarge')); ?>
 <?php echo $form->textFieldRow($model, 'metakeywords', array('class'=>'input-xxlarge')); ?>
 <?php echo $form->textAreaRow($model, 'metadesc', array('class'=>'input-xxlarge','rows'=>3)); ?>
  <div class="control-group">
	<?php echo $form->labelEx($model,'content',array('class'=>'control-label')); ?>
	<div class="controls">
	<?php
		$this->widget('ext.dxheditor.DxhEditor',array(
			'model'=>$model,
			'attribute' => 'content',
			'htmlOptions' => array('style'=>'width:100%;height:350px;'),
            'options' =>array('tools'=>'simple'),
	));?>
	</div>
	<?php echo $form->error($model,'content'); ?>
</div>
 
<?php echo $form->textFieldRow($model, 'price1', array('hint'=>'打折的价格','hintOptions'=>array('class'=>'help-inline'))); ?>
<?php echo $form->textFieldRow($model, 'price2', array('hint'=>'市场上价格','hintOptions'=>array('class'=>'help-inline'))); ?>
<?php echo $form->textFieldRow($model, 'store', array('hint'=>'库存量','hintOptions'=>array('class'=>'help-inline'))); ?>
<?php echo $form->textFieldRow($model, 'sold', array('hint'=>'销售量','hintOptions'=>array('class'=>'help-inline'))); ?>
<?php echo $form->dropDownListRow($model, 'type', $model->getLevelOptions(),array('hint'=>'产品的星级','hintOptions'=>array('class'=>'help-inline'))); ?>
<?php echo $form->textFieldRow($model, 'ordernum', array('hint'=>'产品等级','hintOptions'=>array('class'=>'help-inline'))); ?>

 </fieldset>
<div class="form-actions">
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'submit', 'type'=>'primary', 'label'=>$model->isNewRecord ? 'Create' : 'Save')); ?>
    <?php $this->widget('bootstrap.TbButton', array('buttonType'=>'reset', 'label'=>'Reset')); ?>
</div>
<?php $this->endWidget(); ?>
<?php
	Yii::app()->clientScript->registerScript('product_cid',"
	    var pid = $('#Products_pid').val();
	    $.ajax({
		  url: '".CController::createUrl('procates/subcate')."',
		  type: 'POST',
		  data: $('#products-form').serialize(),
		  success: function(html){
			$('#Products_cid').html(html);
			$('#Products_cid').val(".$model->cid.");
		  }
		});
	");
?>