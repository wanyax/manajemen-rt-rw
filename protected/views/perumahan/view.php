<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('admin'),
	$model->nama,
);

$this->menu=array(
	//array('label'=>'List Perumahan', 'url'=>array('index')),
	array('label'=>'Create Perumahan', 'url'=>array('create')),
	array('label'=>'Update Perumahan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Perumahan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Perumahan', 'url'=>array('admin')),
);
?>

<h1>View Perumahan <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nama',
		'kecamatan',
		'kota_madya',
		'kota',
		'propinsi',
	),
)); ?>
