<?php
/* @var $this PerumahanController */
/* @var $model Perumahan */

$this->breadcrumbs=array(
	'Perumahan'=>array('admin'),
	'Create',
);

$this->menu=array(
	//array('label'=>'List Perumahan', 'url'=>array('index')),
	array('label'=>'Manage Perumahan', 'url'=>array('admin')),
);
?>

<h1>Create Perumahan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>