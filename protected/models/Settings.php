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
 * @property integer $set_order
 * @property integer $set_type
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
			array('categoryid, name, description, set_order, set_type', 'required'),
			array('categoryid, set_order, set_type', 'numerical', 'integerOnly'=>true),
			array('property', 'length', 'max'=>30),
			array('setvalue', 'length', 'max'=>1000),
			array('name', 'length', 'max'=>50),
			array('description', 'length', 'max'=>100),
			array('langid', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, categoryid, property, setvalue, name, description, set_order, set_type, langid', 'safe', 'on'=>'search'),
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
			'set_order' => 'Set Order',
			'set_type' => 'Set Type',
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
		$criteria->compare('set_order',$this->set_order);
		$criteria->compare('set_type',$this->set_type);
		$criteria->compare('langid',$this->langid,true);

		return new CActiveDataProvider($this, array(
			/*
			'pagination'=>array(
	            'pageSize'=>20,//设置每页显示20条
	        ),
	        'sort'=>array(
	            'defaultOrder'=>'create_time DESC', //设置默认排序是create_time倒序
	        ),
	        */
	       	'sort'=>false,
			'criteria'=>$criteria,
		));
	}
}