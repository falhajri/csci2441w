<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'skill-entry-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'empid'); ?>
		<?php echo $form->textField($model,'empid'); ?>
		<?php echo $form->error($model,'empid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skillid'); ?>
		<?php echo $form->textField($model,'skillid'); ?>
		<?php echo $form->error($model,'skillid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastupdated'); ?>
		<?php echo $form->textField($model,'lastupdated'); ?>
		<?php echo $form->error($model,'lastupdated'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enteredby'); ?>
		<?php echo $form->textField($model,'enteredby',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'enteredby'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->