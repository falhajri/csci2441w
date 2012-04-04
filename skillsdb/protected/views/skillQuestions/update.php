<?php
$this->breadcrumbs=array(
	'Skill Questions'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SkillQuestions', 'url'=>array('index')),
	array('label'=>'Create SkillQuestions', 'url'=>array('create')),
	array('label'=>'View SkillQuestions', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SkillQuestions', 'url'=>array('admin')),
);
?>

<h1>Update SkillQuestions <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>