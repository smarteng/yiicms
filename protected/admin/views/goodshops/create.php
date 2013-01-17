<?php
/* @var $this GoodshopsController */
/* @var $model Goodshops */
$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('bootstrap.TbBreadcrumbs',
	array('links'=>array('后台首页'=>'#', '添加好店'),
		  'homeLink'=>CHtml::link('菜单',Yii::app()->homeUrl),
		  'htmlOptions'=>array('class'=>''),
		  'separator'=>'/'));
?>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>