<?php
/* @var $this JabatanRwController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jabatan Rws',
);

$this->menu=array(
	array('label'=>'Create JabatanRw', 'url'=>array('create')),
	array('label'=>'Manage JabatanRw', 'url'=>array('admin')),
);
?>

<h1>Jabatan Rws</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
