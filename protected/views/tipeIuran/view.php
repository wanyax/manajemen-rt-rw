<?php
/* @var $this TipeIuranController */
/* @var $model TipeIuran */

$this->breadcrumbs=array(
	'Tipe Iurans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipeIuran', 'url'=>array('index')),
	array('label'=>'Create TipeIuran', 'url'=>array('create')),
	array('label'=>'Update TipeIuran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipeIuran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipeIuran', 'url'=>array('admin')),
);
?>

<h1>View TipeIuran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rt_id',
		'nama',
		'tipe_periode_id',
		'nominal',
		'status_berlaku',
	),
)); ?>
