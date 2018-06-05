<?php
/* @var $this CertificatesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Certificates',
);

$this->menu=array(
	array('label'=>'Create Certificates', 'url'=>array('create')),
	array('label'=>'Manage Certificates', 'url'=>array('admin')),
);
?>

<h1>Certificates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
