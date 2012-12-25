<?php
/* @var $this SettingsController */
/* @var $data Settings */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryid')); ?>:</b>
	<?php echo CHtml::encode($data->categoryid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('property')); ?>:</b>
	<?php echo CHtml::encode($data->property); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('setvalue')); ?>:</b>
	<?php echo CHtml::encode($data->setvalue); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('langid')); ?>:</b>
	<?php echo CHtml::encode($data->langid); ?>
	<br />


</div>