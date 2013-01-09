<?php
/* @var $this PengurusRwController */
/* @var $data PengurusRw */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rw_id')); ?>:</b>
	<?php echo CHtml::encode($data->rw_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('warga_id')); ?>:</b>
	<?php echo CHtml::encode($data->warga_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('jabatan_rw_id')); ?>:</b>
	<?php echo CHtml::encode($data->jabatan_rw_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_berakhir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_berakhir); ?>
	<br />


</div>