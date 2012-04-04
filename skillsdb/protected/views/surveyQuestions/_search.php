<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'surveyquestionsid'); ?>
		<?php echo $form->textField($model,'surveyquestionsid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'questiontext'); ?>
		<?php echo $form->textField($model,'questiontext',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'helptext'); ?>
		<?php echo $form->textArea($model,'helptext',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'required'); ?>
		<?php echo $form->textField($model,'required'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'skillquestionid'); ?>
		<?php echo $form->textField($model,'skillquestionid'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->