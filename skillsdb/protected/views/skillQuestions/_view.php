<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commandid')); ?>:</b>
	<?php echo CHtml::encode($data->commandid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillid')); ?>:</b>
	<?php echo CHtml::encode($data->skillid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('effectivedate')); ?>:</b>
	<?php echo CHtml::encode($data->effectivedate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subordinate')); ?>:</b>
	<?php echo CHtml::encode($data->subordinate); ?>
	<br />


</div>