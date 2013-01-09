<?php
/* @var $this RwController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Rws',
);

$this->menu=array(
	array('label'=>'Create Rw', 'url'=>array('create')),
	array('label'=>'Manage Rw', 'url'=>array('admin')),
);
?>

<h1>Rws</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
