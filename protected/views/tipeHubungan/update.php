<?php
/* @var $this TipeHubunganController */
/* @var $model TipeHubungan */

$this->breadcrumbs=array(
	'Tipe Hubungans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipeHubungan', 'url'=>array('index')),
	array('label'=>'Create TipeHubungan', 'url'=>array('create')),
	array('label'=>'View TipeHubungan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipeHubungan', 'url'=>array('admin')),
);
?>

<h1>Update TipeHubungan <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>