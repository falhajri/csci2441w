<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('commandid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->commandid), array('view', 'id'=>$data->commandid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aor')); ?>:</b>
	<?php echo CHtml::encode($data->aor); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parent')); ?>:</b>
	<?php echo CHtml::encode($data->parent); ?>
	<br />


</div>