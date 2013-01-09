<?php
/* @var $this TipeHubunganController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipe Hubungans',
);

$this->menu=array(
	array('label'=>'Create TipeHubungan', 'url'=>array('create')),
	array('label'=>'Manage TipeHubungan', 'url'=>array('admin')),
);
?>

<h1>Tipe Hubungans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
