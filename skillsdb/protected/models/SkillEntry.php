<?php

/**
 * This is the model class for table "skillentry".
 *
 * The followings are the available columns in table 'skillentry':
 * @property integer $skillentryid
 * @property integer $empid
 * @property integer $skillid
 * @property string $lastupdated
 * @property string $enteredby
 * @property string $status
 */
class SkillEntry extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SkillEntry the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'skillentry';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('empid, skillid, lastupdated, enteredby, status', 'required'),
			array('empid, skillid', 'numerical', 'integerOnly'=>true),
			array('enteredby, status', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('skillentryid, empid, skillid, lastupdated, enteredby, status', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'skillentryid' => 'Skillentryid',
			'empid' => 'Empid',
			'skillid' => 'Skillid',
			'lastupdated' => 'Lastupdated',
			'enteredby' => 'Enteredby',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('skillentryid',$this->skillentryid);
		$criteria->compare('empid',$this->empid);
		$criteria->compare('skillid',$this->skillid);
		$criteria->compare('lastupdated',$this->lastupdated,true);
		$criteria->compare('enteredby',$this->enteredby,true);
		$criteria->compare('status',$this->status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}