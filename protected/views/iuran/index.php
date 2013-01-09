<?php
/* @var $this IuranController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Iurans',
);

$this->menu=array(
	array('label'=>'Create Iuran', 'url'=>array('create')),
	array('label'=>'Manage Iuran', 'url'=>array('admin')),
);
?>

<h1>Iurans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
