<?php
/* @var $this MinisterialController */
/* @var $model Ministerial */

$this->breadcrumbs=array(
	'Ministerials'=>array('index'),
	$model->ministerial,
);

$this->menu=array(
	array('label'=>'List Ministerial', 'url'=>array('index')),
	array('label'=>'Create Ministerial', 'url'=>array('create')),
	array('label'=>'Update Ministerial', 'url'=>array('update', 'id'=>$model->ministerial)),
	array('label'=>'Delete Ministerial', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ministerial),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Ministerial', 'url'=>array('admin')),
);
?>

<h1>View Ministerial #<?php echo $model->ministerial; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ministerial',
		'student_id',
		'diocese',
		'ministry',
		'sub_deacon',
		'deacon',
		'priest',
	),
)); ?>
