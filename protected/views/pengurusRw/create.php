<?php
/* @var $this PengurusRwController */
/* @var $model PengurusRw */

$this->breadcrumbs=array(
	'Pengurus Rws'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PengurusRw', 'url'=>array('index')),
	array('label'=>'Manage PengurusRw', 'url'=>array('admin')),
);
?>

<h1>Create PengurusRw</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>