<?php
/* @var $this JabatanRwController */
/* @var $model JabatanRw */

$this->breadcrumbs=array(
	'Jabatan Rws'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List JabatanRw', 'url'=>array('index')),
	array('label'=>'Manage JabatanRw', 'url'=>array('admin')),
);
?>

<h1>Create JabatanRw</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>