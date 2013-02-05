<?php
/* @var $this ChannelsController */
/* @var $model Channels */

$this->breadcrumbs=array(
	'Channels'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Channels', 'url'=>array('index')),
	array('label'=>'Manage Channels', 'url'=>array('admin')),
);
?>

<h1>Create Channels</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>