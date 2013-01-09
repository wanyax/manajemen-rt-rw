<?php
/* @var $this RtController */
/* @var $model Rt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rt-form',
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
		<?php echo $form->labelEx($model,'rw_id'); ?>
		<?php //echo $form->textField($model,'rw_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php
		  $this->widget('ext.customAutoComplete',
		  array(
		    'model' => $model,
			'value' => isset($model->rw->nama) ? $model->rw->nama : "",
		    'attribute' => 'rw_id',
		    'name' => 'rw_autocomplete',
		    'source' => $this->createUrl('rt/rwautocomplete'),
		    'options'=>
		       array(
			      'minLength'=>'0',
			      ),
		    'htmlOptions'=>array(
			'style'=>'height:20px;',
			), 
		  )); ?>
		<?php echo $form->error($model,'rw_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->