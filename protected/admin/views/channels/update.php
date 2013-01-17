<?php
/* @var $this ChannelsController */
/* @var $model Channels */

$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('bootstrap.TbBreadcrumbs',
	array('links'=>array('后台首页'=>'#', '更新频道'),
		  'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
		  'htmlOptions'=>array('class'=>''),
		  'separator'=>'/'));
?>

<h4>更新频道：<?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>