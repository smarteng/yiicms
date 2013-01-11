<?php
/* @var $this CateController */
/* @var $model Cate */

$this->breadcrumbs=array(
	'Cates'=>array('index'),
	$model->sid=>array('view','id'=>$model->sid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Cate', 'url'=>array('index')),
	array('label'=>'Create Cate', 'url'=>array('create')),
	array('label'=>'View Cate', 'url'=>array('view', 'id'=>$model->sid)),
	array('label'=>'Manage Cate', 'url'=>array('admin')),
);
?>

<h1>Update Cate <?php echo $model->sid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>