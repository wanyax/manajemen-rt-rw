<?php
/* @var $this TipeIuranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipe Iurans',
);

$this->menu=array(
	array('label'=>'Create TipeIuran', 'url'=>array('create')),
	array('label'=>'Manage TipeIuran', 'url'=>array('admin')),
);
?>

<h1>Tipe Iurans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
