<?php
/* @var $this IuranController */
/* @var $model Iuran */

$this->breadcrumbs=array(
	'Iurans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Iuran', 'url'=>array('index')),
	array('label'=>'Create Iuran', 'url'=>array('create')),
	array('label'=>'View Iuran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Iuran', 'url'=>array('admin')),
);
?>

<h1>Update Iuran <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>