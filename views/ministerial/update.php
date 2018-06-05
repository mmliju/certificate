<?php
/* @var $this MinisterialController */
/* @var $model Ministerial */

$this->breadcrumbs=array(
	'Ministerials'=>array('index'),
	$model->ministerial=>array('view','id'=>$model->ministerial),
	'Update',
);

$this->menu=array(
	array('label'=>'List Ministerial', 'url'=>array('index')),
	array('label'=>'Create Ministerial', 'url'=>array('create')),
	array('label'=>'View Ministerial', 'url'=>array('view', 'id'=>$model->ministerial)),
	array('label'=>'Manage Ministerial', 'url'=>array('admin')),
);
?>

<h1>Update Ministerial <?php echo $model->ministerial; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>