<?php
/* @var $this RumahController */
/* @var $model Rumah */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'rumah-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nomor'); ?>
		<?php echo $form->textField($model,'nomor',array('size'=>10,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nomor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nama'); ?>
		<?php echo $form->textField($model,'nama',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nama'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blok_id'); ?>
		<?php //echo $form->textField($model,'blok_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php //echo $form->textField($model,'rt_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php
		  $this->widget('ext.customAutoComplete',
		  array(
		    'model' => $model,
			'value' => isset($model->blok->nama) ? $model->blok->nama : "",
		    'attribute' => 'blok_id',
		    'name' => 'blok_autocomplete',
		    'source' => $this->createUrl('autocomplete/parse/blok'),
		    'options'=>
		       array(
			      'minLength'=>'0',
			      ),
		    'htmlOptions'=>array(
			'style'=>'height:20px;',
			), 
		  )); ?>
		<?php echo $form->error($model,'blok_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rt_id'); ?>
		<?php //echo $form->textField($model,'rt_id',array('size'=>10,'maxlength'=>10)); ?>
		<?php
		  $this->widget('ext.customAutoComplete',
		  array(
		    'model' => $model,
			'value' => isset($model->rt->nama) ? $model->rt->nama : "",
		    'attribute' => 'rt_id',
		    'name' => 'rt_autocomplete',
		    'source' => $this->createUrl('autocomplete/parse/rt'),
		    'options'=>
		       array(
			      'minLength'=>'0',
			      ),
		    'htmlOptions'=>array(
			'style'=>'height:20px;',
			), 
		  )); ?>
		<?php echo $form->error($model,'rt_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->