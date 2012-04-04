<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillentryid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->skillentryid), array('view', 'id'=>$data->skillentryid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('empid')); ?>:</b>
	<?php echo CHtml::encode($data->empid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillid')); ?>:</b>
	<?php echo CHtml::encode($data->skillid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastupdated')); ?>:</b>
	<?php echo CHtml::encode($data->lastupdated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enteredby')); ?>:</b>
	<?php echo CHtml::encode($data->enteredby); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>