<?php
/* @var $this RumahController */
/* @var $data Rumah */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nomor')); ?>:</b>
	<?php echo CHtml::encode($data->nomor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blok_id')); ?>:</b>
	<?php echo CHtml::encode($data->blok_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rt_id')); ?>:</b>
	<?php echo CHtml::encode($data->rt_id); ?>
	<br />


</div>