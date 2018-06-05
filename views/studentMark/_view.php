<?php
/* @var $this StudentMarkController */
/* @var $data StudentMark */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('mark_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->mark_id), array('view', 'id'=>$data->mark_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('subject_id')); ?>:</b>
	<?php echo CHtml::encode($data->subject_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mark')); ?>:</b>
	<?php echo CHtml::encode($data->mark); ?>
	<br />


</div>