<?php
/* @var $this MinisterialController */
/* @var $model Ministerial */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'ministerial-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
));

/*$this->widget('zii.widgets.jui.CJuiDatePicker',array(
    'name'=>'deacon',
    // additional javascript options for the date picker plugin
    'options'=>array(
        'showAnim'=>'fold',
    ),
    'htmlOptions'=>array(
        'style'=>'height:20px;'
    ),
));*/

 ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
    <div class="row">
            <?php echo $form->labelEx($model,'student_id'); ?>
            <?php
			if(isset($_GET['create_id']))
			 $id = $_GET['create_id'];
			else
			  $id = "";
        $list = CHtml::listData(Students::model()->findAll(array('order' => 'name')), 'id', 'name');
        echo $form->dropDownList($model, 'student_id', $list,array('options' => array($id=>array('selected'=>true))));
        ?>
            <?php echo $form->error($model,'student_id'); ?>
        </div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'diocese'); ?>
       
		<?php echo $form->textField($model,'diocese',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'diocese'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ministry'); ?>
		<?php echo $form->textField($model,'ministry',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ministry'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sub_deacon'); ?>
         <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => date("Y-m-d", strtotime($model->sub_deacon)),
                'attribute' => 'sub_deacon',
                'options' => array(
                    'dateFormat' => 'yy-mm-dd',
                    'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                    'showButtonPanel' => true,
                ),
            )); ?>
		
		<?php echo $form->error($model,'sub_deacon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'deacon'); ?>
		 <?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => date("Y-m-d", strtotime($model->deacon)),
                'attribute' => 'deacon',
                'options' => array(
                    'dateFormat' => 'yy-mm-dd',
                    'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                    'showButtonPanel' => true,
                ),
            )); ?>
		
		<?php echo $form->error($model,'deacon'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'priest'); ?>
		<?php $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'value' => date("Y-m-d", strtotime($model->priest)),
                'attribute' => 'priest',
                'options' => array(
                    'dateFormat' => 'yy-mm-dd',
                    'showAnim' => 'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
                    'showButtonPanel' => true,
                ),
            )); ?>
		<?php echo $form->error($model,'priest'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->