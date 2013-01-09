<?php
/* @var $this RtController */
/* @var $model Rt */

$this->breadcrumbs=array(
	'Rt'=>array('admin'),
	'Manage',
);

$this->menu=array(
	//array('label'=>'List Rt', 'url'=>array('index')),
	array('label'=>'Create Rt', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('rt-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Rt</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'rt-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class' => 'IndexColumn',
			'header' => 'No.',
		),
		array(
			'name' => 'nama',
			'type' => 'raw',
			'value' => 'CHtml::link($data->nama,$data->id)'
		),
		array(
			'name' => 'nama_rw',
			'type' => 'raw',
			'value' => 'CHtml::link($data->rw->nama,array("rw/view", "id" => $data->rw->id))'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
