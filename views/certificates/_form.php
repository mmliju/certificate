<?php
/* @var $this CertificatesController */
/* @var $model Certificates */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'certificates-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'student_id'); ?>
		<?php
        $list = CHtml::listData(Students::model()->findAll(array('order' => 'name')), 'id', 'name');
		if(isset($_GET['create_id']))
		 $id = $_GET['create_id'];
		else
		  $id = "";
		
        echo $form->dropDownList($model, 'student_id', $list,array('options' => array($id=>array('selected'=>true))));
        ?>
		<?php echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bd'); ?>
		<?php echo $form->textField($model,'bd',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'bd'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gst'); ?>
		<?php echo $form->textField($model,'gst',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'gst'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textArea($model,'other',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->