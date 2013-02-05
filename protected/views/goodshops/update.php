<?php
/* @var $this GoodshopsController */
/* @var $model Goodshops */

$this->breadcrumbs=array(
	'Goodshops'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Goodshops', 'url'=>array('index')),
	array('label'=>'Create Goodshops', 'url'=>array('create')),
	array('label'=>'View Goodshops', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Goodshops', 'url'=>array('admin')),
);
?>

<h1>Update Goodshops <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>