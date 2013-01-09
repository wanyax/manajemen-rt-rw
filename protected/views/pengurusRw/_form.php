<?php
/* @var $this PengurusRwController */
/* @var $model PengurusRw */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'pengurus-rw-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rw_id'); ?>
		<?php echo $form->textField($model,'rw_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rw_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'warga_id'); ?>
		<?php echo $form->textField($model,'warga_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'warga_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'jabatan_rw_id'); ?>
		<?php echo $form->textField($model,'jabatan_rw_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'jabatan_rw_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_mulai'); ?>
		<?php echo $form->textField($model,'tanggal_mulai'); ?>
		<?php echo $form->error($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tanggal_berakhir'); ?>
		<?php echo $form->textField($model,'tanggal_berakhir'); ?>
		<?php echo $form->error($model,'tanggal_berakhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->