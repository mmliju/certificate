<?php
/* @var $this MinisterialController */
/* @var $model Ministerial */

$this->breadcrumbs=array(
	'Ministerials'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Ministerial', 'url'=>array('index')),
	array('label'=>'Create Ministerial', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ministerial-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Ministerials</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'ministerial-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ministerial',
		'student_id',
		'diocese',
		'ministry',
		'sub_deacon',
		'deacon',
		/*
		'priest',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
