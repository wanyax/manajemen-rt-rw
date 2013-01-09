<?php
/* @var $this TipeIuranController */
/* @var $model TipeIuran */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipe-iuran-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'rt_id'); ?>
		<?php echo $form->textField($model,'rt_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'rt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipe_periode_id'); ?>
		<?php echo $form->textField($model,'tipe_periode_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'tipe_periode_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nominal'); ?>
		<?php echo $form->textField($model,'nominal',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'nominal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_berlaku'); ?>
		<?php echo $form->textField($model,'status_berlaku'); ?>
		<?php echo $form->error($model,'status_berlaku'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->