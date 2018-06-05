<?php
/* @var $this CertificatesController */
/* @var $model Certificates */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	$model->certificates_id,
);

$this->menu=array(
	array('label'=>'List Certificates', 'url'=>array('index')),
	array('label'=>'Create Certificates', 'url'=>array('create')),
	array('label'=>'Update Certificates', 'url'=>array('update', 'id'=>$model->certificates_id)),
	array('label'=>'Delete Certificates', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->certificates_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Certificates', 'url'=>array('admin')),
);
?>

<h1>View Certificates #<?php echo $model->certificates_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'certificates_id',
		'student_id',
		'bd',
		'gst',
		'other',
	),
)); ?>
