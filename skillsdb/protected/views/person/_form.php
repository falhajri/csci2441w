<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'person-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'emplid'); ?>
		<?php echo $form->textField($model,'emplid'); ?>
		<?php echo $form->error($model,'emplid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commandid'); ?>
		<?php echo $form->textField($model,'commandid'); ?>
		<?php echo $form->error($model,'commandid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'homelocation'); ?>
		<?php echo $form->textField($model,'homelocation'); ?>
		<?php echo $form->error($model,'homelocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stationid'); ?>
		<?php echo $form->textField($model,'stationid'); ?>
		<?php echo $form->error($model,'stationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first'); ?>
		<?php echo $form->textField($model,'first',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'first'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last'); ?>
		<?php echo $form->textField($model,'last',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'last'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->