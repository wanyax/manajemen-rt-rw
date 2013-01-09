<?php
/* @var $this WargaController */
/* @var $model Warga */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'warga-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_depan'); ?>
		<?php echo $form->textField($model,'nama_depan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_depan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama_belakang'); ?>
		<?php echo $form->textField($model,'nama_belakang',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama_belakang'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kelamin'); ?>
		<?php echo $form->textField($model,'kelamin'); ?>
		<?php echo $form->error($model,'kelamin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_lahir'); ?>
		<?php echo $form->textField($model,'tanggal_lahir'); ?>
		<?php echo $form->error($model,'tanggal_lahir'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_kepala_keluarga'); ?>
		<?php echo $form->textField($model,'status_kepala_keluarga'); ?>
		<?php echo $form->error($model,'status_kepala_keluarga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rumah_id'); ?>
		<?php echo $form->textField($model,'rumah_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rumah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_wafat'); ?>
		<?php echo $form->textField($model,'tanggal_wafat'); ?>
		<?php echo $form->error($model,'tanggal_wafat'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->