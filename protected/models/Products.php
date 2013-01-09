<?php

/**
 * This is the model class for table "{{products}}".
 *
 * The followings are the available columns in table '{{products}}':
 * @property string $id
 * @property string $cid
 * @property integer $type
 * @property string $hits
 * @property string $posttime
 * @property string $alias
 * @property string $name
 * @property string $serialnum
 * @property string $seotitle
 * @property string $metakeywords
 * @property string $metadesc
 * @property string $content
 * @property string $picids
 * @property string $picpaths
 * @property double $price1
 * @property double $price2
 * @property string $store
 * @property string $sold
 * @property integer $level
 * @property string $ordernum
 * @property string $langid
 */
class Products extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Products the static model class
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
		return '{{products}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('content', 'required'),
			array('type, level', 'numerical', 'integerOnly'=>true),
			array('price1, price2', 'numerical'),
			array('cid, hits, posttime, store, sold, ordernum, langid', 'length', 'max'=>10),
			array('alias, seotitle, metakeywords, metadesc, picpaths', 'length', 'max'=>255),
			array('name, picids', 'length', 'max'=>100),
			array('serialnum', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cid, type, hits, posttime, alias, name, serialnum, seotitle, metakeywords, metadesc, content, picids, picpaths, price1, price2, store, sold, level, ordernum, langid', 'safe', 'on'=>'search'),
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
			'cid' => 'Cid',
			'type' => 'Type',
			'hits' => 'Hits',
			'posttime' => 'Posttime',
			'alias' => 'Alias',
			'name' => 'Name',
			'serialnum' => 'Serialnum',
			'seotitle' => 'Seotitle',
			'metakeywords' => 'Metakeywords',
			'metadesc' => 'Metadesc',
			'content' => 'Content',
			'picids' => 'Picids',
			'picpaths' => 'Picpaths',
			'price1' => 'Price1',
			'price2' => 'Price2',
			'store' => 'Store',
			'sold' => 'Sold',
			'level' => 'Level',
			'ordernum' => 'Ordernum',
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
		$criteria->compare('cid',$this->cid,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('hits',$this->hits,true);
		$criteria->compare('posttime',$this->posttime,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('serialnum',$this->serialnum,true);
		$criteria->compare('seotitle',$this->seotitle,true);
		$criteria->compare('metakeywords',$this->metakeywords,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('picids',$this->picids,true);
		$criteria->compare('picpaths',$this->picpaths,true);
		$criteria->compare('price1',$this->price1);
		$criteria->compare('price2',$this->price2);
		$criteria->compare('store',$this->store,true);
		$criteria->compare('sold',$this->sold,true);
		$criteria->compare('level',$this->level);
		$criteria->compare('ordernum',$this->ordernum,true);
		$criteria->compare('langid',$this->langid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}