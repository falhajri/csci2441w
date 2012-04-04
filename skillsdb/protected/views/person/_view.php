<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('emplid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->emplid), array('view', 'id'=>$data->emplid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commandid')); ?>:</b>
	<?php echo CHtml::encode($data->commandid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('homelocation')); ?>:</b>
	<?php echo CHtml::encode($data->homelocation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stationid')); ?>:</b>
	<?php echo CHtml::encode($data->stationid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first')); ?>:</b>
	<?php echo CHtml::encode($data->first); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last')); ?>:</b>
	<?php echo CHtml::encode($data->last); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />


</div>