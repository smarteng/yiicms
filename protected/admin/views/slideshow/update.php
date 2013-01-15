<?php
/* @var $this SlideshowController */
/* @var $model Slideshow */

$this->breadcrumbs=array(
	'Slideshows'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Slideshow', 'url'=>array('index')),
	array('label'=>'Create Slideshow', 'url'=>array('create')),
	array('label'=>'View Slideshow', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Slideshow', 'url'=>array('admin')),
);
?>

<h1>Update Slideshow <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>