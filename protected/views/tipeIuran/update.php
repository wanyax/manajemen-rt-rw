<?php
/* @var $this TipeIuranController */
/* @var $model TipeIuran */

$this->breadcrumbs=array(
	'Tipe Iurans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipeIuran', 'url'=>array('index')),
	array('label'=>'Create TipeIuran', 'url'=>array('create')),
	array('label'=>'View TipeIuran', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipeIuran', 'url'=>array('admin')),
);
?>

<h1>Update TipeIuran <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>