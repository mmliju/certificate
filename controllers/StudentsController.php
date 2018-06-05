<?php

class StudentsController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','mark','loadsubjects'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Students;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
			$name       = $_FILES['Students']['name']['photo'];
			$filename   = pathinfo($name, PATHINFO_FILENAME);
			$ext        = pathinfo($name, PATHINFO_EXTENSION);
			
			$model->photo=CUploadedFile::getInstance($model,'photo');
			$newName        =  time()."-".$filename.'.'.$ext;
			$model->photo  = CUploadedFile::getInstance($model,'photo');
			
		

			if($model->save())
			{
				$uploadedFile = $model->photo->saveAs('photos/'.$newName);
				$model->photo = $newName;
				$model->save();
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Students']))
		{
			$model->attributes=$_POST['Students'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Students');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Students('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Students']))
			$model->attributes=$_GET['Students'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}
//===================================================
	public function actionMark($id)
	{
		$sql = "select subjects.subject_id 	as id , student_mark.mark as mark,subjects.subject_name as subject,subject_code,semester from student_mark join subjects on student_mark.subject_id = subjects.subject_id where student_mark.student_id  = '$id' order by semester ";
		$list= Yii::app()->db->createCommand($sql)->queryAll();
	$count = Yii::app()->db->createCommand('SELECT COUNT(*) FROM (' . $sql . ') as count_alias')->queryScalar();
		//------------------------------------------------------
	$dataProvider=new CSqlDataProvider($sql, array(
    'totalItemCount'=>$count,
    'sort'=>array(
        'attributes'=>array(
             'subject', 'mark',
        ),
    ),
    'pagination'=>array(
        'pageSize'=>100,
    ),
));
//--------------------------------------------------------------------
		

		$model=new StudentMark;
		$this->performAjaxValidation($model);
		if(isset($_POST['StudentMark']))
		{
			
			$model->attributes=$_POST['StudentMark'];
			
			$model->save();
				//$this->redirect(array('view','id'=>$model->mark_id));
		}
		//-----------------------------------------------------
		
		$this->render('marks',array(
			'list'=>$dataProvider,'model'=>$model,"student_id"=>$id
		));
		//print_r($list);

	}
	public function actionLoadsubjects()
	{
	   $semester =  $_POST['semester_id'];
	   $data=Subjects::model()->findAll('semester='.$semester, 
	   array(':semester'=>$semester));
	 
	   $data=CHtml::listData($data,'subject_id','subject_name');
	 
	   echo "<option value=''>Select Subjects</option>";
	   foreach($data as $value=>$subject_name)
	   echo CHtml::tag('option', array('value'=>$value),CHtml::encode($subject_name),true);
	}
//=================================================================
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Students the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Students::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Students $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && ($_POST['ajax']==='students-form' || $_POST['ajax']==='student-mark-form' ))
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
}
