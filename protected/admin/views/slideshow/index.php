<?php
/* @var $this SlideshowController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Slideshows',
);

$this->menu=array(
	array('label'=>'Create Slideshow', 'url'=>array('create')),
	array('label'=>'Manage Slideshow', 'url'=>array('admin')),
);
?>

<h1>Slideshows</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
