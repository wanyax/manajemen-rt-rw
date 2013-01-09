<?php
/* @var $this TipeIuranController */
/* @var $model TipeIuran */

$this->breadcrumbs=array(
	'Tipe Iurans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipeIuran', 'url'=>array('index')),
	array('label'=>'Manage TipeIuran', 'url'=>array('admin')),
);
?>

<h1>Create TipeIuran</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>