<?php
/* @var $this IuranController */
/* @var $model Iuran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'iuran-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'periode_id'); ?>
		<?php echo $form->textField($model,'periode_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'periode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rumah_id'); ?>
		<?php echo $form->textField($model,'rumah_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rumah_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nominal'); ?>
		<?php echo $form->textField($model,'nominal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nominal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pembayar_id'); ?>
		<?php echo $form->textField($model,'pembayar_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'pembayar_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'penerima_id'); ?>
		<?php echo $form->textField($model,'penerima_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'penerima_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->