<?php
$this->breadcrumbs=array(
	'Commands',
);

$this->menu=array(
	array('label'=>'Create Command', 'url'=>array('create')),
	array('label'=>'Manage Command', 'url'=>array('admin')),
);
?>

<h1>Commands</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
