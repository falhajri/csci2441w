<?php
$this->breadcrumbs=array(
	'Skills',
);

$this->menu=array(
	array('label'=>'Create Skill', 'url'=>array('create')),
	array('label'=>'Manage Skill', 'url'=>array('admin')),
);
?>

<h1>Skills</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
