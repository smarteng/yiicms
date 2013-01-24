<?php
/* @var $this CateController */
/* @var $model Cate */

$this->pageTitle=Yii::app()->name;
?>
<?php $this->widget('bootstrap.TbBreadcrumbs',
	array('links'=>array('后台首页'=>'#', '更新文章分类'),
		  'homeLink'=>CHtml::link('菜单',array('site/welcome'),array('target'=>'main')),
		  'htmlOptions'=>array('class'=>''),
		  'separator'=>'/'));
?>

<h4>更新文章分类：<?php echo $model->sid; ?></h4>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>