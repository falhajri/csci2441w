<?php
$this->breadcrumbs=array(
	'Duty Stations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DutyStation', 'url'=>array('index')),
	array('label'=>'Manage DutyStation', 'url'=>array('admin')),
);
?>

<h1>Create DutyStation</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>