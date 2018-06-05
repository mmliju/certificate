<?php
/* @var $this StudentMarkController */
/* @var $model StudentMark */

$this->breadcrumbs=array(
	'Student Marks'=>array('index'),
	$model->mark_id,
);

$this->menu=array(
	array('label'=>'List StudentMark', 'url'=>array('index')),
	array('label'=>'Create StudentMark', 'url'=>array('create')),
	array('label'=>'Update StudentMark', 'url'=>array('update', 'id'=>$model->mark_id)),
	array('label'=>'Delete StudentMark', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->mark_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StudentMark', 'url'=>array('admin')),
);
?>

<h1>View StudentMark #<?php echo $model->mark_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'mark_id',
		'student_id',
		'subject_id',
		'mark',
	),
)); ?>
