<?php
/* @var $this PengurusRtController */
/* @var $model PengurusRt */

$this->breadcrumbs=array(
	'Pengurus Rts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PengurusRt', 'url'=>array('index')),
	array('label'=>'Create PengurusRt', 'url'=>array('create')),
	array('label'=>'View PengurusRt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PengurusRt', 'url'=>array('admin')),
);
?>

<h1>Update PengurusRt <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>