<?php
/* @var $this GoodshopsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Goodshops',
);

$this->menu=array(
	array('label'=>'Create Goodshops', 'url'=>array('create')),
	array('label'=>'Manage Goodshops', 'url'=>array('admin')),
);
?>

<h1>Goodshops</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
