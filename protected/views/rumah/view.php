<?php
/* @var $this RumahController */
/* @var $model Rumah */

$this->breadcrumbs=array(
	'Rumahs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Rumah', 'url'=>array('index')),
	array('label'=>'Create Rumah', 'url'=>array('create')),
	array('label'=>'Update Rumah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rumah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rumah', 'url'=>array('admin')),
);
?>

<h1>View Rumah #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nomor',
		'nama',
		'blok_id',
		'rt_id',
	),
)); ?>
