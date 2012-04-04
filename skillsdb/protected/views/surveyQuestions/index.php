<?php
$this->breadcrumbs=array(
	'Survey Questions',
);

$this->menu=array(
	array('label'=>'Create SurveyQuestions', 'url'=>array('create')),
	array('label'=>'Manage SurveyQuestions', 'url'=>array('admin')),
);
?>

<h1>Survey Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
