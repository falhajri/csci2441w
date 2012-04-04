<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'skill-questions-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'commandid'); ?>
		<?php echo $form->textField($model,'commandid'); ?>
		<?php echo $form->error($model,'commandid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skillid'); ?>
		<?php echo $form->textField($model,'skillid'); ?>
		<?php echo $form->error($model,'skillid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'effectivedate'); ?>
		<?php echo $form->textField($model,'effectivedate'); ?>
		<?php echo $form->error($model,'effectivedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subordinate'); ?>
		<?php echo $form->textField($model,'subordinate'); ?>
		<?php echo $form->error($model,'subordinate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->