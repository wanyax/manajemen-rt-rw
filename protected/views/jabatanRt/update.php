<?php
/* @var $this JabatanRtController */
/* @var $model JabatanRt */

$this->breadcrumbs=array(
	'Jabatan Rts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List JabatanRt', 'url'=>array('index')),
	array('label'=>'Create JabatanRt', 'url'=>array('create')),
	array('label'=>'View JabatanRt', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage JabatanRt', 'url'=>array('admin')),
);
?>

<h1>Update JabatanRt <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>