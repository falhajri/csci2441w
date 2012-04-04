<?php
$this->breadcrumbs=array(
	'Commands'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Command', 'url'=>array('index')),
	array('label'=>'Create Command', 'url'=>array('create')),
	array('label'=>'Update Command', 'url'=>array('update', 'id'=>$model->commandid)),
	array('label'=>'Delete Command', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->commandid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Command', 'url'=>array('admin')),
);
?>

<h1>View Command #<?php echo $model->commandid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'commandid',
		'name',
		'type',
		'aor',
		'parent',
	),
)); ?>
