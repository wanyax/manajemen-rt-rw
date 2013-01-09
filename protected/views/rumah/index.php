<?php
/* @var $this RumahController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rumahs',
);

$this->menu=array(
	array('label'=>'Create Rumah', 'url'=>array('create')),
	array('label'=>'Manage Rumah', 'url'=>array('admin')),
);
?>

<h1>Rumahs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
