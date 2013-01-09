<?php
/* @var $this PeriodeController */
/* @var $model Periode */

$this->breadcrumbs=array(
	'Periodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Periode', 'url'=>array('index')),
	array('label'=>'Manage Periode', 'url'=>array('admin')),
);
?>

<h1>Create Periode</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>