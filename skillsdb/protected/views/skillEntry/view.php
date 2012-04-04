<?php
$this->breadcrumbs=array(
	'Skill Entries'=>array('index'),
	$model->skillentryid,
);

$this->menu=array(
	array('label'=>'List SkillEntry', 'url'=>array('index')),
	array('label'=>'Create SkillEntry', 'url'=>array('create')),
	array('label'=>'Update SkillEntry', 'url'=>array('update', 'id'=>$model->skillentryid)),
	array('label'=>'Delete SkillEntry', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->skillentryid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SkillEntry', 'url'=>array('admin')),
);
?>

<h1>View SkillEntry #<?php echo $model->skillentryid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'skillentryid',
		'empid',
		'skillid',
		'lastupdated',
		'enteredby',
		'status',
	),
)); ?>
