<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('admin'),
	$model->id=>array('view','id'=>$model->nama),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Perumahan', 'url'=>array('index')),
	array('label'=>'Create Perumahan', 'url'=>array('create')),
	array('label'=>'View Perumahan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Perumahan', 'url'=>array('admin')),
);
?>

<h1>Update Perumahan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>