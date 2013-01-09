<?php
/* @var $this PerumahanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Perumahans',
);

$this->menu=array(
	array('label'=>'Create Perumahan', 'url'=>array('create')),
	array('label'=>'Manage Perumahan', 'url'=>array('admin')),
);
?>

<h1>Perumahans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
