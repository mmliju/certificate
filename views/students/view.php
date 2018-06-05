<?php
/* @var $this StudentsController */
/* @var $model Students */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Create Students', 'url'=>array('create')),
	array('label'=>'Update Students', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Students', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Students', 'url'=>array('admin')),
);
$img = CHtml::image(Yii::app()->request->baseUrl.'/img/update.png');
$student = CHtml::image(Yii::app()->request->baseUrl.'/img/student.png');

?>

<h1><?php echo  $student; ?> View  :<?php echo $model->name; ?>&nbsp;&nbsp;
<?php
 echo CHtml::link($img, 'index.php?r=students/update&id='.$model->id); ?></h1>
<?php   
$photo =  CHtml::image(Yii::app()->request->baseUrl.'/photos/'.$model->photo,"",array("width"=>"150px" ,"height"=>"100px")); ?>

<div style="W float:left; margin-left:180px;"><?php echo CHtml::link($photo, '#'); ?></div>
<?php 
$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'year',
		'address',
		'dob',
		'marital_status',
		'diocese',
		'contact',
		'email',
		'status',
		'created',
		
		
	),
)); ?>
<?php
if(isset($model->academics->batch))
{
$academic = CHtml::image(Yii::app()->request->baseUrl.'/img/academic.png');

?>

<h1><?php echo  $academic; ?> Academic&nbsp;&nbsp;
<?php
 echo CHtml::link($img, 'index.php?r=academic/update&id='.$model->academics->academic_id); ?></h1>
  
<?php 
//$certificate = new CActiveDataProvider('Certificates');

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		array(
		'name' => 'Batch',
		'value' => $model->academics->batch,
		),
		array(
		'name' => 'Passed Out',
		'value' => $model->academics->passed_out,
		),
		array(
		'name' => 'BD',
		'value' => $model->academics->bd  ,
		),
		array(
		'name' => 'GST',
		'value' => $model->academics->gst  ,
		),
		array(
		'name' => 'achievements',
		'value' => $model->academics->achievements ,
		),
		array(
		'name' => 'remarks',
		'value' => $model->academics->remarks ,
		),
	),
)); ?>
<?php
}
else
{
?>
<?php 
$academic = CHtml::image(Yii::app()->request->baseUrl.'/img/academic.png');

echo $academic.CHtml::link('Add Academic Details', 'index.php?r=academic/create&create_id='.$model->id); ?>
<?php
}
?>
<?php
if(isset($model->ministerials))
{
$ministerial = CHtml::image(Yii::app()->request->baseUrl.'/img/ministerial.png');
?>
<h1> <?php echo  $ministerial; ?> Ministerial &nbsp;&nbsp;
<?php
 echo CHtml::link($img, 'index.php?r=ministerial/update&id='.$model->ministerials->ministerial); ?></h1>
  
<?php 
//$certificate = new CActiveDataProvider('Certificates');

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		array(
		'name' => 'Diocese',
		'value' => $model->ministerials->diocese,
		),
		array(
		'name' => 'Ministry',
		'value' => $model->ministerials->ministry ,
		),
		array(
		'name' => 'Sub Deacon',
		'value' => $model->ministerials->sub_deacon  ,
		),
		array(
		'name' => 'Deacon',
		'value' => $model->ministerials->sub_deacon  ,
		),
		array(
		'name' => 'Priest',
		'value' => $model->ministerials->priest ,
		),
	),
)); ?>
<?php
}
else
{
	$ministerial = CHtml::image(Yii::app()->request->baseUrl.'/img/ministerial.png');

	echo "<br/><br/>".$ministerial. CHtml::link('Add Ministerial Details', 'index.php?r=ministerial/create&create_id='.$model->id); 
}
if(isset($model->certificates))
{
$certificate = CHtml::image(Yii::app()->request->baseUrl.'/img/certificate.png');

?>
<h1><?php echo  $certificate; ?> Cerificates&nbsp;&nbsp;<?php

 echo CHtml::link($img, 'index.php?r=certificates/update&id='.$model->certificates->certificates_id); ?></h1>
  
<?php 
//$certificate = new CActiveDataProvider('Certificates');

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		array(
		'name' => 'BD',
		'value' => $model->certificates->bd,
		),
		array(
		'name' => 'GST',
		'value' => $model->certificates->gst,
		),
		array(
		'name' => 'Other',
		'value' => $model->certificates->other,
		),
	),
)); ?>
<?php
}
else
{
	$certificate = CHtml::image(Yii::app()->request->baseUrl.'/img/certificate.png');

	echo "<br/><br/>".$certificate. CHtml::link('Add Certificate Details', 'index.php?r=certificates/create&create_id='.$model->id); 
}

?>
