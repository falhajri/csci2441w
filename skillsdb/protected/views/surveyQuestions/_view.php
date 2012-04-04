<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('surveyquestionsid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->surveyquestionsid), array('view', 'id'=>$data->surveyquestionsid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('questiontext')); ?>:</b>
	<?php echo CHtml::encode($data->questiontext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('helptext')); ?>:</b>
	<?php echo CHtml::encode($data->helptext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('required')); ?>:</b>
	<?php echo CHtml::encode($data->required); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skillquestionid')); ?>:</b>
	<?php echo CHtml::encode($data->skillquestionid); ?>
	<br />


</div>