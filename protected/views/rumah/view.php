<?php
/* @var $this RumahController */
/* @var $model Rumah */

$this->breadcrumbs=array(
	'Rumah'=>array('admin'),
	$model->nama,
);

$this->menu=array(
	//array('label'=>'List Rumah', 'url'=>array('index')),
	array('label'=>'Create Rumah', 'url'=>array('create')),
	array('label'=>'Update Rumah', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Rumah', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Rumah', 'url'=>array('admin')),
);
?>

<h1>View Rumah <?php echo $model->nama; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'nomor',
		'nama',
		 array(               // related city displayed as a link
            'label' =>'Blok',
            'type' =>'raw',
            'value' => $model->hasAttribute('blok_id') ? CHtml::link(CHtml::encode($model->blok->nama),array('blok/view','id'=>$model->blok->id)) : "",
        ),
		 array(               // related city displayed as a link
            'label'=>'RT',
            'type'=>'raw',
            'value'=>CHtml::link(CHtml::encode($model->rt->nama),
                array('rt/view','id'=>$model->rt->id)),
        ),
	),
)); ?>
