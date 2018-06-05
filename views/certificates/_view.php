<?php
/* @var $this CertificatesController */
/* @var $data Certificates */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('certificates_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->certificates_id), array('view', 'id'=>$data->certificates_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bd')); ?>:</b>
	<?php echo CHtml::encode($data->bd); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gst')); ?>:</b>
	<?php echo CHtml::encode($data->gst); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />


</div>