<?php
$this->breadcrumbs=array(
	'Skill Entries'=>array('index'),
	$model->skillentryid=>array('view','id'=>$model->skillentryid),
	'Update',
);

$this->menu=array(
	array('label'=>'List SkillEntry', 'url'=>array('index')),
	array('label'=>'Create SkillEntry', 'url'=>array('create')),
	array('label'=>'View SkillEntry', 'url'=>array('view', 'id'=>$model->skillentryid)),
	array('label'=>'Manage SkillEntry', 'url'=>array('admin')),
);
?>

<h1>Update SkillEntry <?php echo $model->skillentryid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>