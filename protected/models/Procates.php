<?php

/**
 * This is the model class for table "{{procates}}".
 *
 * The followings are the available columns in table '{{procates}}':
 * @property string $id
 * @property string $pid
 * @property string $ordernum
 * @property integer $ishidden
 * @property string $alias
 * @property string $title
 * @property string $seotitle
 * @property string $metakeywords
 * @property string $metadesc
 * @property string $langid
 */
class Procates extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Procates the static model class
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
		return '{{procates}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ishidden', 'numerical', 'integerOnly'=>true),
			array('pid, ordernum, langid', 'length', 'max'=>10),
			array('alias, title', 'length', 'max'=>45),
			array('seotitle, metakeywords, metadesc', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pid, ordernum, ishidden, alias, title, seotitle, metakeywords, metadesc, langid', 'safe', 'on'=>'search'),
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
			'pid' => 'Pid',
			'ordernum' => 'Ordernum',
			'ishidden' => 'Ishidden',
			'alias' => 'Alias',
			'title' => 'Title',
			'seotitle' => 'Seotitle',
			'metakeywords' => 'Metakeywords',
			'metadesc' => 'Metadesc',
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
		$criteria->compare('pid',$this->pid,true);
		$criteria->compare('ordernum',$this->ordernum,true);
		$criteria->compare('ishidden',$this->ishidden);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('seotitle',$this->seotitle,true);
		$criteria->compare('metakeywords',$this->metakeywords,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('langid',$this->langid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}