<?php
$this->breadcrumbs=array(
	'Skill Questions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SkillQuestions', 'url'=>array('index')),
	array('label'=>'Create SkillQuestions', 'url'=>array('create')),
	array('label'=>'Update SkillQuestions', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SkillQuestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SkillQuestions', 'url'=>array('admin')),
);
?>

<h1>View SkillQuestions #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'commandid',
		'skillid',
		'effectivedate',
		'subordinate',
	),
)); ?>
