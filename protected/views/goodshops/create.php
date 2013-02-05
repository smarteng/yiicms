<?php
/* @var $this GoodshopsController */
/* @var $model Goodshops */

$this->breadcrumbs=array(
	'Goodshops'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Goodshops', 'url'=>array('index')),
	array('label'=>'Manage Goodshops', 'url'=>array('admin')),
);
?>

<h1>Create Goodshops</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>