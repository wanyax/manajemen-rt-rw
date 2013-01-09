<?php
/* @var $this IuranController */
/* @var $model Iuran */

$this->breadcrumbs=array(
	'Iurans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Iuran', 'url'=>array('index')),
	array('label'=>'Create Iuran', 'url'=>array('create')),
	array('label'=>'Update Iuran', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Iuran', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Iuran', 'url'=>array('admin')),
);
?>

<h1>View Iuran #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'periode_id',
		'rumah_id',
		'nominal',
		'pembayar_id',
		'penerima_id',
	),
)); ?>
