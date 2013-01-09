<?php
/* @var $this BlokController */
/* @var $model Blok */

$this->breadcrumbs=array(
	'Blok'=>array('admin'),
	$model->nama,
);

$this->menu=array(
	//array('label'=>'List Blok', 'url'=>array('index')),
	array('label'=>'Create Blok', 'url'=>array('create')),
	array('label'=>'Update Blok', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Blok', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Blok', 'url'=>array('admin')),
);
?>

<h1>View Blok <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nama',
		array(               // related city displayed as a link
            'label'=>'Perumahan',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->perumahan->nama),
                array('perumahan/view','id'=>$model->perumahan->id)),
        ),
	),
)); ?>
