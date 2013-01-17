<?php
/* @var $this ProcatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Procates',
);

$this->menu=array(
	array('label'=>'Create Procates', 'url'=>array('create')),
	array('label'=>'Manage Procates', 'url'=>array('admin')),
);
?>

<h1>Procates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
