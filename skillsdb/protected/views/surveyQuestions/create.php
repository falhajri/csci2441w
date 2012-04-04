<?php
$this->breadcrumbs=array(
	'Survey Questions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SurveyQuestions', 'url'=>array('index')),
	array('label'=>'Manage SurveyQuestions', 'url'=>array('admin')),
);
?>

<h1>Create SurveyQuestions</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>