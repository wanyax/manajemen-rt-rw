<?php
/* @var $this PengurusRwController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Pengurus Rws',
);

$this->menu=array(
	array('label'=>'Create PengurusRw', 'url'=>array('create')),
	array('label'=>'Manage PengurusRw', 'url'=>array('admin')),
);
?>

<h1>Pengurus Rws</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
