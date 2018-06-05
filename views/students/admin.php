<?php
/* @var $this StudentsController */
/* @var $model Students */

$this->breadcrumbs=array(
	'Students'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Students', 'url'=>array('index')),
	array('label'=>'Create Students', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#students-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Students</h1>



<?php echo CHtml::link("Add New Student", 'index.php?r=students/create'); ?><div class="search-form" style="display:none">

</div><!-- search-form -->

<?php 
 //$names= CHtml::listData(Students::model()->findAll(array('order'=>'year')), 'year', 'year');
// echo CHtml::dropDownList('year','year',  $names);
   
?>
<?php 
//print_r(CHtml::listData(Students::model()->findAll(array('order'=>'year')), 'year', 'year'));
//print_r(Students::model()->findAll(array('order'=>'name')));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'students-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		 array(
		    'header'=>'No.',
		    'value'=>'$this->grid->dataProvider->pagination->currentPage * $this->grid->dataProvider->pagination->pageSize + ($row+1)',
		  ),
		'name',
		array(
		    'header'=>'Year',
			'value'=>'$data->year',
			'filter'=> CHtml::dropDownList('Students[year]',$model->year,CHtml::listData(Students::model()->findAll(), 'year', 'year'),array('empty'=>'Select')),
			//'filter'=> CHtml::dropDownList('name','students[name]', CHtml::listData(Students::model()->findAll(array('order'=>'name')), 'name', 'name')),
			// CHtml::listData(Students::model()->findAll(array('order'=>'name')), 'name', 'name'),
			//
			),
		array(
		    'header'=>'BD',
		//	'value'=>'$data->certificates->bd;',
			'value'=>'(isset($data->academics->bd )) ? $data->academics->bd : null',
			'filter'=>'',
		//	'visible'=> Yii::app()->certificates->bd,
			),
		array(
		    'header'=>'GST',
		//	'value'=>'$data->certificates->bd;',
			'value'=>'(isset($data->academics->bd )) ? $data->academics->gst : null',
			'filter'=>'',
		//	'visible'=> Yii::app()->certificates->bd,
			),
		array(
		    'header'=>'DOB',
			'value'=>'$data->dob',
			'filter'=>'',
			),
	/*	array(
		    'header'=>'Batch',
			'value'=>'$data->academics->batch',
			'filter'=> CHtml::listData(Academic::model()->findAll(array('order'=>'batch')), 'batch', 'batch'),
			),
		array(
		    'header'=>'Diocese',
			'value'=>'$data->ministerials->diocese',
			'filter'=> '',
			),
			array(
		    'header'=>'Ministry',
			'value'=>'$data->ministerials->ministry',
			'filter'=> '',
			),*/
			
		array(
		    'header'=>'Email',
			'value'=>'$data->email',
			'filter'=> '',
			),
		/*
		'email',
		'status',
		'created',
		*/
		   array(
                    'class'=>'CLinkColumn',
                    'label'=>'Mark',
                    'urlExpression'=>'"index.php?r=students/mark&id=".$data->id."&name=".$data->name',
                    'header'=>'Marks'
                    ),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
