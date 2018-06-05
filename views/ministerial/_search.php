<?php
/* @var $this MinisterialController */
/* @var $model Ministerial */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ministerial'); ?>
		<?php echo $form->textField($model,'ministerial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'diocese'); ?>
		<?php echo $form->textField($model,'diocese',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ministry'); ?>
		<?php echo $form->textField($model,'ministry',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sub_deacon'); ?>
		<?php echo $form->textField($model,'sub_deacon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'deacon'); ?>
		<?php echo $form->textField($model,'deacon'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'priest'); ?>
		<?php echo $form->textField($model,'priest'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->