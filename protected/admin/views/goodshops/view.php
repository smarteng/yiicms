<?php
/* @var $this GoodshopsController */
/* @var $model Goodshops */

$this->breadcrumbs=array(
	'Goodshops'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Goodshops', 'url'=>array('index')),
	array('label'=>'Create Goodshops', 'url'=>array('create')),
	array('label'=>'Update Goodshops', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Goodshops', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Goodshops', 'url'=>array('admin')),
);
?>

<h1>View Goodshops #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'logo',
		'tags',
		'nick',
		'url',
		'description',
		'share_count',
		'created',
		'updated',
	),
)); ?>
