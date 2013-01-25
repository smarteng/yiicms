<?php

/**
 * This is the model class for table "{{goodshops}}".
 *
 * The followings are the available columns in table '{{goodshops}}':
 * @property integer $id
 * @property string $name
 * @property string $logo
 * @property string $tags
 * @property string $nick
 * @property string $url
 * @property string $description
 * @property integer $share_count
 * @property string $created
 * @property string $updated
 */
class Goodshops extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Goodshops the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
     * Prepares created and updated  attributes before performing validation.
     */
    protected function beforeValidate() {
 
        if ($this->isNewRecord) {
			$this->created = time();
        }else{
        	$this->updated = time();
        }
        return parent::beforeValidate();
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{goodshops}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, tags, nick, url, description, share_count, created, updated', 'required'),
			array('share_count', 'numerical', 'integerOnly'=>true),
			array('name, logo, nick, url', 'length', 'max'=>250),
			array('image', 'file',"allowEmpty" => TRUE,'types'=>'jpg,gif,jpeg,png',"maxSize" => 409600),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, logo, tags, nick, url, description, share_count, created, updated', 'safe', 'on'=>'search'),
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
			'name' => '好店名称',
			'logo' => '好店Logo',
			'tags' => '标签',
			'nick' => '掌柜昵称',
			'url' => 'URL',
			'description' => '描述',
			'share_count' => '推荐次数',
			'created' => '创建时间',
			'updated' => '更新时间',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('tags',$this->tags,true);
		$criteria->compare('nick',$this->nick,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('share_count',$this->share_count);
		$criteria->compare('created',$this->created,true);
		$criteria->compare('updated',$this->updated,true);
		$criteria->order='created desc';
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