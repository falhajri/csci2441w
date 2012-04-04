<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'survey-questions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'questiontext'); ?>
		<?php echo $form->textField($model,'questiontext',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'questiontext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'helptext'); ?>
		<?php echo $form->textArea($model,'helptext',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'helptext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'required'); ?>
		<?php echo $form->textField($model,'required'); ?>
		<?php echo $form->error($model,'required'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skillquestionid'); ?>
		<?php echo $form->textField($model,'skillquestionid'); ?>
		<?php echo $form->error($model,'skillquestionid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->