<?php
$this->breadcrumbs=array(
	'people'=>array('index'),
	$model->emplid=>array('view','id'=>$model->emplid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Person', 'url'=>array('index')),
	array('label'=>'Create Person', 'url'=>array('create')),
	array('label'=>'View Person', 'url'=>array('view', 'id'=>$model->emplid)),
	array('label'=>'Manage Person', 'url'=>array('admin')),
);
?>

<h1>Update Person <?php echo $model->emplid; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>