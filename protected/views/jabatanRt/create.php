<?php
/* @var $this JabatanRtController */
/* @var $model JabatanRt */

$this->breadcrumbs=array(
	'Jabatan Rts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JabatanRt', 'url'=>array('index')),
	array('label'=>'Manage JabatanRt', 'url'=>array('admin')),
);
?>

<h1>Create JabatanRt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>