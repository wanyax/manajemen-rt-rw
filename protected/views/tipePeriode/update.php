<?php
/* @var $this TipePeriodeController */
/* @var $model TipePeriode */

$this->breadcrumbs=array(
	'Tipe Periodes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipePeriode', 'url'=>array('index')),
	array('label'=>'Create TipePeriode', 'url'=>array('create')),
	array('label'=>'View TipePeriode', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TipePeriode', 'url'=>array('admin')),
);
?>

<h1>Update TipePeriode <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>