<?php
/* @var $this IuranController */
/* @var $model Iuran */

$this->breadcrumbs=array(
	'Iurans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Iuran', 'url'=>array('index')),
	array('label'=>'Manage Iuran', 'url'=>array('admin')),
);
?>

<h1>Create Iuran</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>