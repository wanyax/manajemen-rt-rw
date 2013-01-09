<?php
/* @var $this TipeHubunganController */
/* @var $model TipeHubungan */

$this->breadcrumbs=array(
	'Tipe Hubungans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipeHubungan', 'url'=>array('index')),
	array('label'=>'Manage TipeHubungan', 'url'=>array('admin')),
);
?>

<h1>Create TipeHubungan</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>