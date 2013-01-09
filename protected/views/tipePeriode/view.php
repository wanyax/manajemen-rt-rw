<?php
/* @var $this TipePeriodeController */
/* @var $model TipePeriode */

$this->breadcrumbs=array(
	'Tipe Periodes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipePeriode', 'url'=>array('index')),
	array('label'=>'Create TipePeriode', 'url'=>array('create')),
	array('label'=>'Update TipePeriode', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipePeriode', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipePeriode', 'url'=>array('admin')),
);
?>

<h1>View TipePeriode #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
