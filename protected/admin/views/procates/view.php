<?php
/* @var $this ProcatesController */
/* @var $model Procates */

$this->breadcrumbs=array(
	'Procates'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Procates', 'url'=>array('index')),
	array('label'=>'Create Procates', 'url'=>array('create')),
	array('label'=>'Update Procates', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Procates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Procates', 'url'=>array('admin')),
);
?>

<h1>View Procates #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pid',
		'ordernum',
		'ishidden',
		'alias',
		'title',
		'seotitle',
		'metakeywords',
		'metadesc',
		'langid',
	),
)); ?>
