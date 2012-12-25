<?php
/* @var $this SettingsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Settings',
);

$this->menu=array(
	array('label'=>'Create Settings', 'url'=>array('create')),
	array('label'=>'Manage Settings', 'url'=>array('admin')),
);
?>

<h1>Settings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
