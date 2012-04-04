<?php

/**
 * This is the model class for table "person".
 *
 * The followings are the available columns in table 'person':
 * @property integer $emplid
 * @property integer $commandid
 * @property string $homelocation
 * @property integer $stationid
 * @property string $first
 * @property string $last
 * @property integer $status
 */
class Person extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Person the static model class
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
		return 'person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('emplid, commandid, homelocation, stationid, first, last, status', 'required'),
			array('emplid, commandid, stationid, status', 'numerical', 'integerOnly'=>true),
			array('first, last', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('emplid, commandid, homelocation, stationid, first, last, status', 'safe', 'on'=>'search'),
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
			'emplid' => 'Emplid',
			'commandid' => 'Commandid',
			'homelocation' => 'Homelocation',
			'stationid' => 'Stationid',
			'first' => 'First',
			'last' => 'Last',
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

		$criteria->compare('emplid',$this->emplid);
		$criteria->compare('commandid',$this->commandid);
		$criteria->compare('homelocation',$this->homelocation,true);
		$criteria->compare('stationid',$this->stationid);
		$criteria->compare('first',$this->first,true);
		$criteria->compare('last',$this->last,true);
		$criteria->compare('status',$this->status);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}