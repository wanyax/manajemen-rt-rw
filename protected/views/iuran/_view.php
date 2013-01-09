<?php
/* @var $this IuranController */
/* @var $data Iuran */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_id')); ?>:</b>
	<?php echo CHtml::encode($data->periode_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rumah_id')); ?>:</b>
	<?php echo CHtml::encode($data->rumah_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nominal')); ?>:</b>
	<?php echo CHtml::encode($data->nominal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pembayar_id')); ?>:</b>
	<?php echo CHtml::encode($data->pembayar_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('penerima_id')); ?>:</b>
	<?php echo CHtml::encode($data->penerima_id); ?>
	<br />


</div>