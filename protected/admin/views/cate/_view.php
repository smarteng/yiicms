<?php
/* @var $this CateController */
/* @var $data Cate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('sid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->sid), array('view', 'id'=>$data->sid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sortname')); ?>:</b>
	<?php echo CHtml::encode($data->sortname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('taxis')); ?>:</b>
	<?php echo CHtml::encode($data->taxis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('keywords')); ?>:</b>
	<?php echo CHtml::encode($data->keywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>