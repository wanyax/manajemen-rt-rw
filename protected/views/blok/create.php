<?php
/* @var $this BlokController */
/* @var $model Blok */

$this->breadcrumbs=array(
	'Blok'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Blok', 'url'=>array('index')),
	array('label'=>'Manage Blok', 'url'=>array('admin')),
);
?>

<h1>Create Blok</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>