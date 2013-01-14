<?php
/* @var $this ChannelsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Channels',
);

$this->menu=array(
	array('label'=>'Create Channels', 'url'=>array('create')),
	array('label'=>'Manage Channels', 'url'=>array('admin')),
);
?>

<h1>Channels</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
