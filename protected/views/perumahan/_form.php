<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'perumahan-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kecamatan'); ?>
		<?php echo $form->textField($model,'kecamatan',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kecamatan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kota_madya'); ?>
		<?php echo $form->textField($model,'kota_madya',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kota_madya'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kota'); ?>
		<?php echo $form->textField($model,'kota',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'kota'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'propinsi'); ?>
		<?php echo $form->textField($model,'propinsi',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'propinsi'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->