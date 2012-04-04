<?php
$this->breadcrumbs=array(
	'Duty Stations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List DutyStation', 'url'=>array('index')),
	array('label'=>'Create DutyStation', 'url'=>array('create')),
	array('label'=>'Update DutyStation', 'url'=>array('update', 'id'=>$model->dutystationid)),
	array('label'=>'Delete DutyStation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->dutystationid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DutyStation', 'url'=>array('admin')),
);
?>

<h1>View DutyStation #<?php echo $model->dutystationid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'dutystationid',
		'name',
		'location',
	),
)); ?>
