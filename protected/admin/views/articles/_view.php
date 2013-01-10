<?php
/* @var $this ArticlesController */
/* @var $data Articles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('channelid')); ?>:</b>
	<?php echo CHtml::encode($data->channelid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cate')); ?>:</b>
	<?php echo CHtml::encode($data->cate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hits')); ?>:</b>
	<?php echo CHtml::encode($data->hits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posttime')); ?>:</b>
	<?php echo CHtml::encode($data->posttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picid')); ?>:</b>
	<?php echo CHtml::encode($data->picid); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('picpath')); ?>:</b>
	<?php echo CHtml::encode($data->picpath); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tag')); ?>:</b>
	<?php echo CHtml::encode($data->tag); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('langid')); ?>:</b>
	<?php echo CHtml::encode($data->langid); ?>
	<br />

	*/ ?>

</div>