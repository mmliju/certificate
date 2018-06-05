<?php
/* @var $this AcademicController */
/* @var $data Academic */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('academic_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->academic_id), array('view', 'id'=>$data->academic_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('batch')); ?>:</b>
	<?php echo CHtml::encode($data->batch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('passed_out')); ?>:</b>
	<?php echo CHtml::encode($data->passed_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bd')); ?>:</b>
	<?php echo CHtml::encode($data->bd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gst')); ?>:</b>
	<?php echo CHtml::encode($data->gst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('achievements')); ?>:</b>
	<?php echo CHtml::encode($data->achievements); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('remarks')); ?>:</b>
	<?php echo CHtml::encode($data->remarks); ?>
	<br />

	*/ ?>

</div>