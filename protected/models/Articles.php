<?php

/**
 * This is the model class for table "{{articles}}".
 *
 * The followings are the available columns in table '{{articles}}':
 * @property string $id
 * @property string $channelid
 * @property integer $type
 * @property string $cate
 * @property string $hits
 * @property string $posttime
 * @property string $picid
 * @property string $picpath
 * @property string $alias
 * @property string $title
 * @property string $content
 * @property string $tag
 * @property string $seotitle
 * @property string $metakeywords
 * @property string $metadesc
 * @property string $langid
 */
class Articles extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Articles the static model class
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
		return '{{articles}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, content, tag', 'required'),
			array('type', 'numerical', 'integerOnly'=>true),
			array('channelid, cate, hits, posttime, picid, langid', 'length', 'max'=>10),
			array('picpath', 'length', 'max'=>45),
			array('alias, title, seotitle, metakeywords, metadesc', 'length', 'max'=>255),
			array('tag', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, channelid, type, cate, hits, posttime, picid, picpath, alias, title, content, tag, seotitle, metakeywords, metadesc, langid', 'safe', 'on'=>'search'),
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
			'channelid' => 'Channelid',
			'type' => 'Type',
			'cate' => 'Cate',
			'hits' => 'Hits',
			'posttime' => 'Posttime',
			'picid' => 'Picid',
			'picpath' => 'Picpath',
			'alias' => 'Alias',
			'title' => 'Title',
			'content' => 'Content',
			'tag' => 'Tag',
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
		$criteria->compare('channelid',$this->channelid,true);
		$criteria->compare('type',$this->type);
		$criteria->compare('cate',$this->cate,true);
		$criteria->compare('hits',$this->hits,true);
		$criteria->compare('posttime',$this->posttime,true);
		$criteria->compare('picid',$this->picid,true);
		$criteria->compare('picpath',$this->picpath,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('tag',$this->tag,true);
		$criteria->compare('seotitle',$this->seotitle,true);
		$criteria->compare('metakeywords',$this->metakeywords,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('langid',$this->langid,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}