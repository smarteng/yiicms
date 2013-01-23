<?php
/* @var $this ProductController */
/* @var $model Products */

$this->breadcrumbs=array(
	'Products'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Products', 'url'=>array('index')),
	array('label'=>'Create Products', 'url'=>array('create')),
	array('label'=>'Update Products', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Products', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Products', 'url'=>array('admin')),
);
?>

<h1>View Products #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'cid',
		'type',
		'hits',
		'posttime',
		'alias',
		'name',
		'serialnum',
		'seotitle',
		'metakeywords',
		'metadesc',
		'content',
		'picids',
		'picpaths',
		'price1',
		'price2',
		'store',
		'sold',
		'level',
		'ordernum',
		'langid',
	),
)); ?>
