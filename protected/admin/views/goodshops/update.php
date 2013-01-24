<?php
/* @var $this GoodshopsController */
/* @var $model Goodshops */

$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('bootstrap.TbBreadcrumbs',
	array('links'=>array('后台首页'=>'#', '更新好店'),
		  'homeLink'=>CHtml::link('菜单',array('site/welcome'),array('target'=>'main')),
		  'htmlOptions'=>array('class'=>''),
		  'separator'=>'/'));
?>

<h4>更新好店：<?php echo $model->id; ?></h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>