<?php
/* @var $this MinisterialController */
/* @var $model Ministerial */

$this->breadcrumbs=array(
	'Ministerials'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Ministerial', 'url'=>array('index')),
	array('label'=>'Manage Ministerial', 'url'=>array('admin')),
);
?>

<h1>Create Ministerial</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>