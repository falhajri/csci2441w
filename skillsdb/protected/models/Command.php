<?php

/**
 * This is the model class for table "command".
 *
 * The followings are the available columns in table 'command':
 * @property integer $commandid
 * @property string $name
 * @property string $type
 * @property string $aor
 * @property integer $parent
 */
class Command extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Command the static model class
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
		return 'command';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, type, aor', 'required'),
			array('parent', 'numerical', 'integerOnly'=>true),
			array('name, type, aor', 'length', 'max'=>35),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('commandid, name, type, aor, parent', 'safe', 'on'=>'search'),
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
			'commandid' => 'Commandid',
			'name' => 'Name',
			'type' => 'Type',
			'aor' => 'Aor',
			'parent' => 'Parent',
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

		$criteria->compare('commandid',$this->commandid);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('aor',$this->aor,true);
		$criteria->compare('parent',$this->parent);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}