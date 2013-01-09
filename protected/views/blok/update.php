<?php
/* @var $this BlokController */
/* @var $model Blok */

$this->breadcrumbs=array(
	'Blok'=>array('admin'),
	$model->id=>array('view','id'=>$model->nama),
	'Update',
);

$this->menu=array(
	//array('label'=>'List Blok', 'url'=>array('index')),
	array('label'=>'Create Blok', 'url'=>array('create')),
	array('label'=>'View Blok', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Blok', 'url'=>array('admin')),
);
?>

<h1>Update Blok <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>