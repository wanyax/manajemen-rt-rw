<?php
/* @var $this WargaController */
/* @var $model Warga */

$this->breadcrumbs=array(
	'Wargas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Warga', 'url'=>array('index')),
	array('label'=>'Manage Warga', 'url'=>array('admin')),
);
?>

<h1>Create Warga</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>