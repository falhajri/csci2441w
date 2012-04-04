<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('dutystationid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->dutystationid), array('view', 'id'=>$data->dutystationid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />


</div>