<?php
/* @var $this PeriodeController */
/* @var $model Periode */

$this->breadcrumbs=array(
	'Periodes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Periode', 'url'=>array('index')),
	array('label'=>'Create Periode', 'url'=>array('create')),
	array('label'=>'View Periode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Periode', 'url'=>array('admin')),
);
?>

<h1>Update Periode <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>