<?php
$this->breadcrumbs=array(
	'Commands'=>array('index'),
	$model->name=>array('view','id'=>$model->commandid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Command', 'url'=>array('index')),
	array('label'=>'Create Command', 'url'=>array('create')),
	array('label'=>'View Command', 'url'=>array('view', 'id'=>$model->commandid)),
	array('label'=>'Manage Command', 'url'=>array('admin')),
);
?>

<h1>Update Command <?php echo $model->commandid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>