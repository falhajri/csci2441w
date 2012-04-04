<?php
$this->breadcrumbs=array(
	'Commands'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Command', 'url'=>array('index')),
	array('label'=>'Manage Command', 'url'=>array('admin')),
);
?>

<h1>Create Command</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>