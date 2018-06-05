<?php
/* @var $this StudentsController */
/* @var $model Students */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'students-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php //echo $form->errorSummary($model); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>251)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>
    <div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>60,'maxlength'=>251)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>251)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dob'); ?>
		  <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => date("Y-m-d", strtotime($model->dob)),
                'attribute' => 'dob',
                'options' => array(
                    'dateFormat' => 'yy-mm-dd',
                    'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                    'showButtonPanel' => true,
                ),
            )); ?>
		<?php echo $form->error($model,'dob'); ?>
	</div>
    <div class="row">
     <?php
		echo $form->labelEx($model, 'photo');
		echo $form->fileField($model, 'photo');
		echo $form->error($model, 'photo');
	 ?>
     </div>
	<div class="row">
		<?php echo $form->labelEx($model,'marital_status'); ?>
       <?php echo $form->radioButtonList($model,'marital_status',array('Single'=>'Single','Married'=>'Married', 'Divorced'=>'Divorced'), array(
    'labelOptions'=>array('style'=>'display:inline'),  'separator'=>'&nbsp;')); ?>
		<?php echo $form->error($model,'marital_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diocese'); ?>
		<?php echo $form->textField($model,'diocese',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'diocese'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'contact'); ?>
		<?php echo $form->textField($model,'contact',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'contact'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
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