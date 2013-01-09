<?php
/* @var $this JabatanRtController */
/* @var $model JabatanRt */

$this->breadcrumbs=array(
	'Jabatan Rts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JabatanRt', 'url'=>array('index')),
	array('label'=>'Create JabatanRt', 'url'=>array('create')),
	array('label'=>'Update JabatanRt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JabatanRt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JabatanRt', 'url'=>array('admin')),
);
?>

<h1>View JabatanRt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
