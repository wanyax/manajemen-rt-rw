<?php
/* @var $this RumahController */
/* @var $model Rumah */

$this->breadcrumbs=array(
	'Rumah'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Rumah', 'url'=>array('index')),
	array('label'=>'Manage Rumah', 'url'=>array('admin')),
);
?>

<h1>Create Rumah</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>