<?php
$this->breadcrumbs=array(
	'Skill Questions',
);

$this->menu=array(
	array('label'=>'Create SkillQuestions', 'url'=>array('create')),
	array('label'=>'Manage SkillQuestions', 'url'=>array('admin')),
);
?>

<h1>Skill Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
