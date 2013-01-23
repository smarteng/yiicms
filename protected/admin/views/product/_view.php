<?php
/* @var $this ProductController */
/* @var $data Products */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hits')); ?>:</b>
	<?php echo CHtml::encode($data->hits); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posttime')); ?>:</b>
	<?php echo CHtml::encode($data->posttime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alias')); ?>:</b>
	<?php echo CHtml::encode($data->alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('serialnum')); ?>:</b>
	<?php echo CHtml::encode($data->serialnum); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picids')); ?>:</b>
	<?php echo CHtml::encode($data->picids); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('picpaths')); ?>:</b>
	<?php echo CHtml::encode($data->picpaths); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price1')); ?>:</b>
	<?php echo CHtml::encode($data->price1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price2')); ?>:</b>
	<?php echo CHtml::encode($data->price2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store')); ?>:</b>
	<?php echo CHtml::encode($data->store); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sold')); ?>:</b>
	<?php echo CHtml::encode($data->sold); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('level')); ?>:</b>
	<?php echo CHtml::encode($data->level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ordernum')); ?>:</b>
	<?php echo CHtml::encode($data->ordernum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('langid')); ?>:</b>
	<?php echo CHtml::encode($data->langid); ?>
	<br />

	*/ ?>

</div>