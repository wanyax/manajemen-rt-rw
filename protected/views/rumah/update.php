<?php
/* @var $this RumahController */
/* @var $model Rumah */

$this->breadcrumbs=array(
	'Rumahs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Rumah', 'url'=>array('index')),
	array('label'=>'Create Rumah', 'url'=>array('create')),
	array('label'=>'View Rumah', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Rumah', 'url'=>array('admin')),
);
?>

<h1>Update Rumah <?php echo $model->nama; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>