<?php
/* @var $this JabatanRwController */
/* @var $model JabatanRw */

$this->breadcrumbs=array(
	'Jabatan Rws'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List JabatanRw', 'url'=>array('index')),
	array('label'=>'Create JabatanRw', 'url'=>array('create')),
	array('label'=>'Update JabatanRw', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete JabatanRw', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage JabatanRw', 'url'=>array('admin')),
);
?>

<h1>View JabatanRw #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nama',
	),
)); ?>
