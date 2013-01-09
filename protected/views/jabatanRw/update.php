<?php
/* @var $this JabatanRwController */
/* @var $model JabatanRw */

$this->breadcrumbs=array(
	'Jabatan Rws'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JabatanRw', 'url'=>array('index')),
	array('label'=>'Create JabatanRw', 'url'=>array('create')),
	array('label'=>'View JabatanRw', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JabatanRw', 'url'=>array('admin')),
);
?>

<h1>Update JabatanRw <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>