<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('userid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->userid), array('view', 'id'=>$data->userid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('emplid')); ?>:</b>
	<?php echo CHtml::encode($data->emplid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passwordhash')); ?>:</b>
	<?php echo CHtml::encode($data->passwordhash); ?>
	<br />


</div>