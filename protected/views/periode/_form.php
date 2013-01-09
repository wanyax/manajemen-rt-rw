<?php
/* @var $this PeriodeController */
/* @var $model Periode */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'periode-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe_iuran_id'); ?>
		<?php echo $form->textField($model,'tipe_iuran_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipe_iuran_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_mulai'); ?>
		<?php echo $form->textField($model,'tanggal_mulai'); ?>
		<?php echo $form->error($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_akhir'); ?>
		<?php echo $form->textField($model,'tanggal_akhir'); ?>
		<?php echo $form->error($model,'tanggal_akhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->