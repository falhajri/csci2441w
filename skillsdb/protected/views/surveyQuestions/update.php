<?php
$this->breadcrumbs=array(
	'Survey Questions'=>array('index'),
	$model->surveyquestionsid=>array('view','id'=>$model->surveyquestionsid),
	'Update',
);

$this->menu=array(
	array('label'=>'List SurveyQuestions', 'url'=>array('index')),
	array('label'=>'Create SurveyQuestions', 'url'=>array('create')),
	array('label'=>'View SurveyQuestions', 'url'=>array('view', 'id'=>$model->surveyquestionsid)),
	array('label'=>'Manage SurveyQuestions', 'url'=>array('admin')),
);
?>

<h1>Update SurveyQuestions <?php echo $model->surveyquestionsid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>