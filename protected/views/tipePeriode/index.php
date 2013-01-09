<?php
/* @var $this TipePeriodeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipe Periodes',
);

$this->menu=array(
	array('label'=>'Create TipePeriode', 'url'=>array('create')),
	array('label'=>'Manage TipePeriode', 'url'=>array('admin')),
);
?>

<h1>Tipe Periodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
