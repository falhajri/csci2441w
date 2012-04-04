<?php
$this->breadcrumbs=array(
	'Survey Questions'=>array('index'),
	$model->surveyquestionsid,
);

$this->menu=array(
	array('label'=>'List SurveyQuestions', 'url'=>array('index')),
	array('label'=>'Create SurveyQuestions', 'url'=>array('create')),
	array('label'=>'Update SurveyQuestions', 'url'=>array('update', 'id'=>$model->surveyquestionsid)),
	array('label'=>'Delete SurveyQuestions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->surveyquestionsid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SurveyQuestions', 'url'=>array('admin')),
);
?>

<h1>View SurveyQuestions #<?php echo $model->surveyquestionsid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'surveyquestionsid',
		'type',
		'questiontext',
		'helptext',
		'required',
		'skillquestionid',
	),
)); ?>
