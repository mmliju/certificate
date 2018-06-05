<?php

/**
 * This is the model class for table "ministerial".
 *
 * The followings are the available columns in table 'ministerial':
 * @property integer $ministerial
 * @property integer $student_id
 * @property string $diocese
 * @property string $ministry
 * @property string $sub_deacon
 * @property string $deacon
 * @property string $priest
 *
 * The followings are the available model relations:
 * @property Students $student
 */
class Ministerial extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ministerial';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, diocese, ministry, sub_deacon, deacon, priest', 'required'),
			array('student_id', 'numerical', 'integerOnly'=>true),
			array('diocese, ministry', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ministerial, student_id, diocese, ministry, sub_deacon, deacon, priest', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'student' => array(self::BELONGS_TO, 'Students', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ministerial' => 'Ministerial',
			'student_id' => 'Student',
			'diocese' => 'Diocese',
			'ministry' => 'Ministry',
			'sub_deacon' => 'Sub Deacon',
			'deacon' => 'Deacon',
			'priest' => 'Priest',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ministerial',$this->ministerial);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('diocese',$this->diocese,true);
		$criteria->compare('ministry',$this->ministry,true);
		$criteria->compare('sub_deacon',$this->sub_deacon,true);
		$criteria->compare('deacon',$this->deacon,true);
		$criteria->compare('priest',$this->priest,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Ministerial the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
