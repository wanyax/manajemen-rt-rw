<?php
/* @var $this WargaController */
/* @var $data Warga */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_depan')); ?>:</b>
	<?php echo CHtml::encode($data->nama_depan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_belakang')); ?>:</b>
	<?php echo CHtml::encode($data->nama_belakang); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelamin')); ?>:</b>
	<?php echo CHtml::encode($data->kelamin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_lahir')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_lahir); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_kepala_keluarga')); ?>:</b>
	<?php echo CHtml::encode($data->status_kepala_keluarga); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rumah_id')); ?>:</b>
	<?php echo CHtml::encode($data->rumah_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('tanggal_wafat')); ?>:</b>
	<?php echo CHtml::encode($data->tanggal_wafat); ?>
	<br />

	*/ ?>

</div>