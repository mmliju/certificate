<?php
/* @var $this MinisterialController */
/* @var $data Ministerial */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ministerial')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ministerial), array('view', 'id'=>$data->ministerial)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('student_id')); ?>:</b>
	<?php echo CHtml::encode($data->student_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diocese')); ?>:</b>
	<?php echo CHtml::encode($data->diocese); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ministry')); ?>:</b>
	<?php echo CHtml::encode($data->ministry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_deacon')); ?>:</b>
	<?php echo CHtml::encode($data->sub_deacon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deacon')); ?>:</b>
	<?php echo CHtml::encode($data->deacon); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('priest')); ?>:</b>
	<?php echo CHtml::encode($data->priest); ?>
	<br />


</div>