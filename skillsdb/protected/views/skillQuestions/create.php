<?php
$this->breadcrumbs=array(
	'Skill Questions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SkillQuestions', 'url'=>array('index')),
	array('label'=>'Manage SkillQuestions', 'url'=>array('admin')),
);
?>

<h1>Create SkillQuestions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>