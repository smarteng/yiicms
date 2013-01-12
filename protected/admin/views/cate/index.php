<?php
/* @var $this CateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cates',
);

$this->menu=array(
	array('label'=>'Create Cate', 'url'=>array('create')),
	array('label'=>'Manage Cate', 'url'=>array('admin')),
);
?>

<h1>Cates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
