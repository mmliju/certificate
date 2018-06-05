<?php
/* @var $this CertificatesController */
/* @var $model Certificates */

$this->breadcrumbs=array(
	'Certificates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Certificates', 'url'=>array('index')),
	array('label'=>'Manage Certificates', 'url'=>array('admin')),
);
?>

<h1>Create Certificates</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>