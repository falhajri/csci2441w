<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commandid'); ?>
		<?php echo $form->textField($model,'commandid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skillid'); ?>
		<?php echo $form->textField($model,'skillid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'effectivedate'); ?>
		<?php echo $form->textField($model,'effectivedate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'subordinate'); ?>
		<?php echo $form->textField($model,'subordinate'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->