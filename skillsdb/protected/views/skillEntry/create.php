<?php
$this->breadcrumbs=array(
	'Skill Entries'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SkillEntry', 'url'=>array('index')),
	array('label'=>'Manage SkillEntry', 'url'=>array('admin')),
);
?>

<h1>Create SkillEntry</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>