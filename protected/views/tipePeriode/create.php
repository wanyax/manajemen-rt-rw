<?php
/* @var $this TipePeriodeController */
/* @var $model TipePeriode */

$this->breadcrumbs=array(
	'Tipe Periodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipePeriode', 'url'=>array('index')),
	array('label'=>'Manage TipePeriode', 'url'=>array('admin')),
);
?>

<h1>Create TipePeriode</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>