<?php
/* @var $this ChannelsController */
/* @var $model Channels */

$this->breadcrumbs=array(
	'Channels'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Channels', 'url'=>array('index')),
	array('label'=>'Create Channels', 'url'=>array('create')),
	array('label'=>'View Channels', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Channels', 'url'=>array('admin')),
);
?>

<h1>Update Channels <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>