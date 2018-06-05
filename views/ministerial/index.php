<?php
/* @var $this MinisterialController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ministerials',
);

$this->menu=array(
	array('label'=>'Create Ministerial', 'url'=>array('create')),
	array('label'=>'Manage Ministerial', 'url'=>array('admin')),
);
?>

<h1>Ministerials</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
