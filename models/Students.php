<?php

/**
 * This is the model class for table "students".
 *
 * The followings are the available columns in table 'students':
 * @property integer $id
 * @property string $name
 * @property string $year
 * @property string $address
 * @property string $dob
 * @property string $marital_status
 * @property string $diocese
 * @property string $contact
 * @property string $email
 * @property string $photo
 * @property string $status
 * @property string $created
 *
 * The followings are the available model relations:
 * @property Academic[] $academics
 * @property Certificates[] $certificates
 * @property Ministerial[] $ministerials
 */
class Students extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'students';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name,year,address, dob, marital_status, ', 'required'),
			array('address', 'length', 'max'=>251),
			array('email', 'email'),
			array('marital_status, status', 'length', 'max'=>8),
			array('diocese, contact, email', 'length', 'max'=>100),
			array('photo', 'file', 'types'=>'jpg, gif, png'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('name,year,address, dob, marital_status, diocese, contact, email, status, created', 'safe', 'on'=>'search'),
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
			'academics' => array(self::HAS_ONE, 'Academic', 'student_id'),
			'certificates' => array(self::HAS_ONE, 'Certificates', 'student_id'),
			'ministerials' => array(self::HAS_ONE, 'Ministerial', 'student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'year' => 'Year',
			'address' => 'Address',
			'dob' => 'Dob',
			'marital_status' => 'Marital Status',
			'diocese' => 'Diocese',
			'contact' => 'Contact',
			'email' => 'Email',
			'status' => 'Status',
			'created' => 'Created',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name);
		$criteria->compare('year',$this->year);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('dob',$this->dob,true);
		$criteria->compare('marital_status',$this->marital_status,true);
		$criteria->compare('diocese',$this->diocese,true);
		$criteria->compare('contact',$this->contact,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created',$this->created,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Students the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function returnSetValues($value)
	{
	  if(isset($value))
	   $returnVal = $value;
	  else
	   $returnVal = "";
	   
	   return $returnVal;
	}
}
