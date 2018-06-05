<?php
/* @var $this StudentMarkController */
/* @var $model StudentMark */

$this->breadcrumbs=array(
	'Student Marks'=>array('index'),
	$model->mark_id=>array('view','id'=>$model->mark_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StudentMark', 'url'=>array('index')),
	array('label'=>'Create StudentMark', 'url'=>array('create')),
	array('label'=>'View StudentMark', 'url'=>array('view', 'id'=>$model->mark_id)),
	array('label'=>'Manage StudentMark', 'url'=>array('admin')),
);
?>

<h1>Update StudentMark <?php echo $model->mark_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>