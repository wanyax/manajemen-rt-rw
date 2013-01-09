<?php
/* @var $this BlokController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Bloks',
);

$this->menu=array(
	array('label'=>'Create Blok', 'url'=>array('create')),
	array('label'=>'Manage Blok', 'url'=>array('admin')),
);
?>

<h1>Bloks</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
