<?php
/* @var $this RtController */
/* @var $model Rt */

$this->breadcrumbs=array(
	'Rts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Rt', 'url'=>array('index')),
	array('label'=>'Manage Rt', 'url'=>array('admin')),
);
?>

<h1>Create Rt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>