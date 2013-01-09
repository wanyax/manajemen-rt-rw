<?php
/* @var $this TipeIuranController */
/* @var $data TipeIuran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rt_id')); ?>:</b>
	<?php echo CHtml::encode($data->rt_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe_periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->tipe_periode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nominal')); ?>:</b>
	<?php echo CHtml::encode($data->nominal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_berlaku')); ?>:</b>
	<?php echo CHtml::encode($data->status_berlaku); ?>
	<br />


</div>