<?php
$this->breadcrumbs=array(
	'Skills'=>array('index'),
	$model->skillid,
);

$this->menu=array(
	array('label'=>'List Skill', 'url'=>array('index')),
	array('label'=>'Create Skill', 'url'=>array('create')),
	array('label'=>'Update Skill', 'url'=>array('update', 'id'=>$model->skillid)),
	array('label'=>'Delete Skill', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->skillid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>

<h1>View Skill #<?php echo $model->skillid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'skillid',
		'skill',
		'helptext',
		'owner',
	),
)); ?>
