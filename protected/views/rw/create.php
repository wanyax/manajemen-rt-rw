<?php
/* @var $this RwController */
/* @var $model Rw */

$this->breadcrumbs=array(
	'Rw'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Rw', 'url'=>array('index')),
	array('label'=>'Manage Rw', 'url'=>array('admin')),
);
?>

<h1>Create Rw</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>