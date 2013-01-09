<?php
/* @var $this PengurusRtController */
/* @var $model PengurusRt */

$this->breadcrumbs=array(
	'Pengurus Rts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List PengurusRt', 'url'=>array('index')),
	array('label'=>'Create PengurusRt', 'url'=>array('create')),
	array('label'=>'Update PengurusRt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PengurusRt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PengurusRt', 'url'=>array('admin')),
);
?>

<h1>View PengurusRt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'rt_id',
		'warga_id',
		'jabatan_rt_id',
		'tanggal_mulai',
		'tanggal_berakhir',
	),
)); ?>
