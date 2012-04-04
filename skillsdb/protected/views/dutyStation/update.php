<?php
$this->breadcrumbs=array(
	'Duty Stations'=>array('index'),
	$model->name=>array('view','id'=>$model->dutystationid),
	'Update',
);

$this->menu=array(
	array('label'=>'List DutyStation', 'url'=>array('index')),
	array('label'=>'Create DutyStation', 'url'=>array('create')),
	array('label'=>'View DutyStation', 'url'=>array('view', 'id'=>$model->dutystationid)),
	array('label'=>'Manage DutyStation', 'url'=>array('admin')),
);
?>

<h1>Update DutyStation <?php echo $model->dutystationid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>