<?php
/* @var $this PengurusRwController */
/* @var $model PengurusRw */

$this->breadcrumbs=array(
	'Pengurus Rws'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PengurusRw', 'url'=>array('index')),
	array('label'=>'Create PengurusRw', 'url'=>array('create')),
	array('label'=>'Update PengurusRw', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PengurusRw', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PengurusRw', 'url'=>array('admin')),
);
?>

<h1>View PengurusRw #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rw_id',
		'warga_id',
		'jabatan_rw_id',
		'tanggal_mulai',
		'tanggal_berakhir',
	),
)); ?>
