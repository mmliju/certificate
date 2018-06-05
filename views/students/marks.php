<h3>Mark List for <?php echo $_GET['name']; ?></h3>
<?php
$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Manage',
);

//---------------------------------------
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider'=>$list,
	'columns'=>array(
	  'semester',
	 'subject',
	 'subject_code',
	  'mark',
	 
	),
));
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-mark-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		 
		<?php echo $form->hiddenField($model,'student_id',array('value'=>$student_id)); ?>
		 
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'subject_semester'); ?>
         <?php echo $form->dropDownList($model,'subject_semester',array("1"=>'1' ,"2"=>'2',"3"=>'3' ,"4"=>'4',"5"=>'5' ,"6"=>'6',"7"=>'8' ,"9"=>'8',"9"=>'9' ,"10"=>'10'),array(	'prompt'=>'Select',
		  'ajax' => array(
                        'type'=>'POST',
                        'url'=>Yii::app()->createUrl('Students/loadsubjects'),
						/*'success' => "js:function(data)
							{
							   alert(data);
							}",*/
                        'update'=>'#subject_id',
                        'data'=>array('semester_id'=>'js:this.value'),
 
        ))); ?>
		<?php echo $form->error($model,'subject_semester'); ?>
	</div>
    	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php //echo CHtml::listData(Subjects::model()->findAll(array('order'=>'subject_name')), 'subject_id ', 'subject_name') ?>
        <?php echo $form->dropDownList($model,'subject_id', array(),array('prompt'=>'Select Semester','id'=>'subject_id')); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mark'); ?>
		<?php echo $form->textField($model,'mark',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'mark'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->