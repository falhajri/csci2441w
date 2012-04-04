<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'skill-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'skill'); ?>
		<?php echo $form->textField($model,'skill',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'skill'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'helptext'); ?>
		<?php echo $form->textArea($model,'helptext',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'helptext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'owner'); ?>
		<?php echo $form->textField($model,'owner'); ?>
		<?php echo $form->error($model,'owner'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->