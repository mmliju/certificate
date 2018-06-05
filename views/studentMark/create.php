<?php
/* @var $this StudentMarkController */
/* @var $model StudentMark */

$this->breadcrumbs=array(
	'Student Marks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StudentMark', 'url'=>array('index')),
	array('label'=>'Manage StudentMark', 'url'=>array('admin')),
);
?>

<h1>Create StudentMark</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>