<?php

/**
 * This is the model class for table "skillquestions".
 *
 * The followings are the available columns in table 'skillquestions':
 * @property integer $id
 * @property integer $commandid
 * @property integer $skillid
 * @property string $effectivedate
 * @property integer $subordinate
 */
class SkillQuestions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SkillQuestions the static model class
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
		return 'skillquestions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('commandid, skillid, effectivedate, subordinate', 'required'),
			array('commandid, skillid, subordinate', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, commandid, skillid, effectivedate, subordinate', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'commandid' => 'Commandid',
			'skillid' => 'Skillid',
			'effectivedate' => 'Effectivedate',
			'subordinate' => 'Subordinate',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('commandid',$this->commandid);
		$criteria->compare('skillid',$this->skillid);
		$criteria->compare('effectivedate',$this->effectivedate,true);
		$criteria->compare('subordinate',$this->subordinate);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}