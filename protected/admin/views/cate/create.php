<?php
/* @var $this CateController */
/* @var $model Cate */

$this->breadcrumbs=array(
	'Cates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Cate', 'url'=>array('index')),
	array('label'=>'Manage Cate', 'url'=>array('admin')),
);
?>

<h1>Create Cate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>