<?php
/* @var $this SubjectsController */
/* @var $model Subjects */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Subjects', 'url'=>array('index')),
	array('label'=>'Create Subjects', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#subjects-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Subjects</h1>


<?php echo CHtml::link("Add New Subject", 'index.php?r=subjects/create'); ?><div class="search-form" style="display:none">

</div>



<?php 
$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'subjects-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'subject_name',
		'subject_code',
		array(
		'name'=>'semester',
		'value' => '$data->semester',
		'filter'=> CHtml::dropDownList('Subjects[semester]',$model->semester,CHtml::listData(Subjects::model()->findAll(), 'semester', 'semester'),array('empty'=>'Select')),
		//'filter'=> CHtml::dropDownList('$data->semester', 1,  CHtml::listData(Subjects::model()->findAll(), 'semester', 'semester')),
			// CHtml::listData(Students::model()->findAll(array('order'=>'name')), 'name', 'name'),
			//
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
