<?php
$this->breadcrumbs=array(
	'Skill Entries',
);

$this->menu=array(
	array('label'=>'Create SkillEntry', 'url'=>array('create')),
	array('label'=>'Manage SkillEntry', 'url'=>array('admin')),
);
?>

<h1>Skill Entries</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
