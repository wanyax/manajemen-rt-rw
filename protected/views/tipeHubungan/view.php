<?php
/* @var $this TipeHubunganController */
/* @var $model TipeHubungan */

$this->breadcrumbs=array(
	'Tipe Hubungans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List TipeHubungan', 'url'=>array('index')),
	array('label'=>'Create TipeHubungan', 'url'=>array('create')),
	array('label'=>'Update TipeHubungan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TipeHubungan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipeHubungan', 'url'=>array('admin')),
);
?>

<h1>View TipeHubungan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
