<?php
/* @var $this RtController */
/* @var $model Rt */

$this->breadcrumbs=array(
	'Rt'=>array('admin'),
	$model->id,
);

$this->menu=array(
	//array('label'=>'List Rt', 'url'=>array('index')),
	array('label'=>'Create Rt', 'url'=>array('create')),
	array('label'=>'Update Rt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rt', 'url'=>array('admin')),
);
?>

<h1>View Rt <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nama',
		'rw.nama',
	),
)); ?>
