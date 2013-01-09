<?php
/* @var $this RtController */
/* @var $model Rt */

$this->breadcrumbs=array(
	'Rts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Rt', 'url'=>array('index')),
	array('label'=>'Create Rt', 'url'=>array('create')),
	array('label'=>'View Rt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rt', 'url'=>array('admin')),
);
?>

<h1>Update Rt <?php echo $model->nama; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>