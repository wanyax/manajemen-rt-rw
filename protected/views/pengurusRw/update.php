<?php
/* @var $this PengurusRwController */
/* @var $model PengurusRw */

$this->breadcrumbs=array(
	'Pengurus Rws'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PengurusRw', 'url'=>array('index')),
	array('label'=>'Create PengurusRw', 'url'=>array('create')),
	array('label'=>'View PengurusRw', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PengurusRw', 'url'=>array('admin')),
);
?>

<h1>Update PengurusRw <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>