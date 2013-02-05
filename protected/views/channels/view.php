<?php
/* @var $this ChannelsController */
/* @var $model Channels */

$this->breadcrumbs=array(
	'Channels'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Channels', 'url'=>array('index')),
	array('label'=>'Create Channels', 'url'=>array('create')),
	array('label'=>'Update Channels', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Channels', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Channels', 'url'=>array('admin')),
);
?>

<h1>View Channels #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'pid',
		'channeltype',
		'systemtype',
		'ordernum',
		'ishidden',
		'positions',
		'alias',
		'title',
		'content',
		'seotitle',
		'metakeywords',
		'metadesc',
		'link',
		'target',
		'langid',
	),
)); ?>
