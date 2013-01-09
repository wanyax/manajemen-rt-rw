<?php
/* @var $this RtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rts',
);

$this->menu=array(
	array('label'=>'Create Rt', 'url'=>array('create')),
	array('label'=>'Manage Rt', 'url'=>array('admin')),
);
?>

<h1>Rts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
