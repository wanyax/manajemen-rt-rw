<?php
/* @var $this JabatanRtController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Jabatan Rts',
);

$this->menu=array(
	array('label'=>'Create JabatanRt', 'url'=>array('create')),
	array('label'=>'Manage JabatanRt', 'url'=>array('admin')),
);
?>

<h1>Jabatan Rts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
