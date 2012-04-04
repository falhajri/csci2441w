<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'emplid'); ?>
		<?php echo $form->textField($model,'emplid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commandid'); ?>
		<?php echo $form->textField($model,'commandid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'homelocation'); ?>
		<?php echo $form->textField($model,'homelocation'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stationid'); ?>
		<?php echo $form->textField($model,'stationid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first'); ?>
		<?php echo $form->textField($model,'first',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last'); ?>
		<?php echo $form->textField($model,'last',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->