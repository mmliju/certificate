<?php
/* @var $this SubjectsController */
/* @var $model Subjects */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'subjects-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_name'); ?>
		<?php echo $form->textField($model,'subject_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'subject_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_code'); ?>
		<?php echo $form->textField($model,'subject_code',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'subject_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'semester'); ?>
         <?php echo $form->dropDownList($model,'semester',array("1"=>'1' ,"2"=>'2',"3"=>'3' ,"4"=>'4',"5"=>'5' ,"6"=>'6',"7"=>'8' ,"9"=>'8',"9"=>'9' ,"10"=>'10')); ?>
		<?php echo $form->error($model,'semester'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
        <?php echo $form->dropDownList($model,'status',array("Active"=>'Active' ,"Deactive"=>'Deactive'   )); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->