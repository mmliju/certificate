<?php
/* @var $this SubjectsController */
/* @var $model Subjects */

$this->breadcrumbs=array(
	'Subjects'=>array('index'),
	$model->subject_id,
);

$this->menu=array(
	array('label'=>'List Subjects', 'url'=>array('index')),
	array('label'=>'Create Subjects', 'url'=>array('create')),
	array('label'=>'Update Subjects', 'url'=>array('update', 'id'=>$model->subject_id)),
	array('label'=>'Delete Subjects', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->subject_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Subjects', 'url'=>array('admin')),
);
?>

<h1>View Subjects #<?php echo $model->subject_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'subject_id',
		'subject_name',
		'subject_code',
		'semester',
		'status',
	),
)); ?>
