<?php
/* @var $this WargaController */
/* @var $model Warga */

$this->breadcrumbs=array(
	'Wargas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Warga', 'url'=>array('index')),
	array('label'=>'Create Warga', 'url'=>array('create')),
	array('label'=>'View Warga', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Warga', 'url'=>array('admin')),
);
?>

<h1>Update Warga <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>