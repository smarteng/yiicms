<?php

/**
 * This is the model class for table "{{settings}}".
 *
 * The followings are the available columns in table '{{settings}}':
 * @property string $id
 * @property integer $categoryid
 * @property string $property
 * @property string $setvalue
 * @property string $name
 * @property string $description
 * @property string $langid
 */
class Settings extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Settings the static model class
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
		return '{{settings}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('categoryid, name, description', 'required'),
			array('categoryid', 'numerical', 'integerOnly'=>true),
			array('property', 'length', 'max'=>30),
			array('setvalue', 'length', 'max'=>1000),
			array('name', 'length', 'max'=>50),
			array('langid', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoryid, property, setvalue, name, description, langid', 'safe', 'on'=>'search'),
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
			'categoryid' => 'Categoryid',
			'property' => 'Property',
			'setvalue' => 'Setvalue',
			'name' => 'Name',
			'description' => 'Description',
			'langid' => 'Langid',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('categoryid',$this->categoryid);
		$criteria->compare('property',$this->property,true);
		$criteria->compare('setvalue',$this->setvalue,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('langid',$this->langid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}