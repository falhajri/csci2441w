<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->skillid), array('view', 'id'=>$data->skillid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skill')); ?>:</b>
	<?php echo CHtml::encode($data->skill); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('helptext')); ?>:</b>
	<?php echo CHtml::encode($data->helptext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('owner')); ?>:</b>
	<?php echo CHtml::encode($data->owner); ?>
	<br />


</div>