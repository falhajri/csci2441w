<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->userid=>array('view','id'=>$model->userid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->userid)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Update Users <?php echo $model->userid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>