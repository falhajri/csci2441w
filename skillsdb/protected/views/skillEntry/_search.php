<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'skillentryid'); ?>
		<?php echo $form->textField($model,'skillentryid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'empid'); ?>
		<?php echo $form->textField($model,'empid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skillid'); ?>
		<?php echo $form->textField($model,'skillid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastupdated'); ?>
		<?php echo $form->textField($model,'lastupdated'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enteredby'); ?>
		<?php echo $form->textField($model,'enteredby',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->