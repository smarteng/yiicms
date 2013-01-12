<?php
/* @var $this CateController */
/* @var $model Cate */

$this->breadcrumbs=array(
	'Cates'=>array('index'),
	$model->sid,
);

$this->menu=array(
	array('label'=>'List Cate', 'url'=>array('index')),
	array('label'=>'Create Cate', 'url'=>array('create')),
	array('label'=>'Update Cate', 'url'=>array('update', 'id'=>$model->sid)),
	array('label'=>'Delete Cate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->sid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Cate', 'url'=>array('admin')),
);
?>

<h1>View Cate #<?php echo $model->sid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'sid',
		'sortname',
		'alias',
		'taxis',
		'keywords',
		'description',
	),
)); ?>
