<?php
$this->breadcrumbs=array(
	'Duty Stations',
);

$this->menu=array(
	array('label'=>'Create DutyStation', 'url'=>array('create')),
	array('label'=>'Manage DutyStation', 'url'=>array('admin')),
);
?>

<h1>Duty Stations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
