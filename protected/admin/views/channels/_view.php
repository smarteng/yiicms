<?php
/* @var $this ChannelsController */
/* @var $data Channels */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pid')); ?>:</b>
	<?php echo CHtml::encode($data->pid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('channeltype')); ?>:</b>
	<?php echo CHtml::encode($data->channeltype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('systemtype')); ?>:</b>
	<?php echo CHtml::encode($data->systemtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordernum')); ?>:</b>
	<?php echo CHtml::encode($data->ordernum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ishidden')); ?>:</b>
	<?php echo CHtml::encode($data->ishidden); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('positions')); ?>:</b>
	<?php echo CHtml::encode($data->positions); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seotitle')); ?>:</b>
	<?php echo CHtml::encode($data->seotitle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metakeywords')); ?>:</b>
	<?php echo CHtml::encode($data->metakeywords); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('metadesc')); ?>:</b>
	<?php echo CHtml::encode($data->metadesc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('link')); ?>:</b>
	<?php echo CHtml::encode($data->link); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('target')); ?>:</b>
	<?php echo CHtml::encode($data->target); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('langid')); ?>:</b>
	<?php echo CHtml::encode($data->langid); ?>
	<br />

	*/ ?>

</div>