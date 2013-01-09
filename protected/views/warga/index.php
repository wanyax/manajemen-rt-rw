<?php
/* @var $this WargaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Wargas',
);

$this->menu=array(
	array('label'=>'Create Warga', 'url'=>array('create')),
	array('label'=>'Manage Warga', 'url'=>array('admin')),
);
?>

<h1>Wargas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
