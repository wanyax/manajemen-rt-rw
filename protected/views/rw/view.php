<?php
/* @var $this RwController */
/* @var $model Rw */

$this->breadcrumbs=array(
	'Rw'=>array('admin'),
	$model->nama,
);

$this->menu=array(
	//array('label'=>'List Rw', 'url'=>array('index')),
	array('label'=>'Create Rw', 'url'=>array('create')),
	array('label'=>'Update Rw', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rw', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rw', 'url'=>array('admin')),
);
?>

<h1>View Rw <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nama',
		'kelurahan',
		'kecamatan',
		'kota_madya',
		'kota',
		'propinsi',
	),
)); ?>
