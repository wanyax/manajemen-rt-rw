<?php
/* @var $this BlokController */
/* @var $model Blok */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'blok-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	<?php //$this->pr($model->perumahan); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'perumahan_id'); ?>
		<?php //echo $form->hiddenField($model,'perumahan_id',array()); ?>
		<?php //echo $form->textField($model,'perumahan_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php
		  $this->widget('ext.customAutoComplete',
		  array(
		    'model' => $model,
			'value' => isset($model->perumahan->nama) ? $model->perumahan->nama : "",
		    'attribute' => 'perumahan_id',
		    'name' => 'perumahan_autocomplete',
		    'source' => $this->createUrl('blok/perumahanautocomplete'),
		    'options'=>
		       array(
			      'minLength'=>'0',
			      ),
		    'htmlOptions'=>array(
			'style'=>'height:20px;',
			), 
		  )); ?>

		<?php echo $form->error($model,'perumahan_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->