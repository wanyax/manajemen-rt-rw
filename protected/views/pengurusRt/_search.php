<?php
/* @var $this PengurusRtController */
/* @var $model PengurusRt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rt_id'); ?>
		<?php echo $form->textField($model,'rt_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'warga_id'); ?>
		<?php echo $form->textField($model,'warga_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'jabatan_rt_id'); ?>
		<?php echo $form->textField($model,'jabatan_rt_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_mulai'); ?>
		<?php echo $form->textField($model,'tanggal_mulai'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tanggal_berakhir'); ?>
		<?php echo $form->textField($model,'tanggal_berakhir'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->