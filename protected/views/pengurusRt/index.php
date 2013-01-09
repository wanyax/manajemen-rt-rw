<?php
/* @var $this PengurusRtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengurus Rts',
);

$this->menu=array(
	array('label'=>'Create PengurusRt', 'url'=>array('create')),
	array('label'=>'Manage PengurusRt', 'url'=>array('admin')),
);
?>

<h1>Pengurus Rts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
