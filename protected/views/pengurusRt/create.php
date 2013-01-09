<?php
/* @var $this PengurusRtController */
/* @var $model PengurusRt */

$this->breadcrumbs=array(
	'Pengurus Rts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PengurusRt', 'url'=>array('index')),
	array('label'=>'Manage PengurusRt', 'url'=>array('admin')),
);
?>

<h1>Create PengurusRt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>