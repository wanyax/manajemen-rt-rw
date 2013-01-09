<?php
/* @var $this RwController */
/* @var $model Rw */

$this->breadcrumbs=array(
	'Rw'=>array('admin'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Rw', 'url'=>array('index')),
	array('label'=>'Create Rw', 'url'=>array('create')),
	array('label'=>'View Rw', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rw', 'url'=>array('admin')),
);
?>

<h1>Update Rw <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>