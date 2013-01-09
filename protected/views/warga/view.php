<?php
/* @var $this WargaController */
/* @var $model Warga */

$this->breadcrumbs=array(
	'Wargas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Warga', 'url'=>array('index')),
	array('label'=>'Create Warga', 'url'=>array('create')),
	array('label'=>'Update Warga', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Warga', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Warga', 'url'=>array('admin')),
);
?>

<h1>View Warga #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama_depan',
		'nama_belakang',
		'kelamin',
		'tanggal_lahir',
		'status_kepala_keluarga',
		'rumah_id',
		'tanggal_wafat',
	),
)); ?>
