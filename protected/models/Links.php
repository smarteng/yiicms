<?php

/**
 * This is the model class for table "{{links}}".
 *
 * The followings are the available columns in table '{{links}}':
 * @property string $id
 * @property string $name
 * @property string $url
 * @property string $content
 * @property string $logo
 * @property string $ordernum
 * @property string $langid
 */
class Links extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Links the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	/**
	 * [beforeValidate :Prepares created and updated  attributes before performing validation.]
	 * @return [type]
	 */
	protected function beforeValidate() {
 
        if ($this->isNewRecord) {
			$this->created = $this->updated = time();
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
		return '{{links}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name', 'length', 'max'=>100),
			array('url, content, logo', 'length', 'max'=>255),
			array('ordernum, langid', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, name, url, content, logo, ordernum, langid', 'safe', 'on'=>'search'),
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
			'name' => '网站名称',
			'url' => '网站Url',
			'content' => '网站描述',
			'logo' => '网站Logo',
			'ordernum' => '排序',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('logo',$this->logo,true);
		$criteria->compare('ordernum',$this->ordernum,true);
		$criteria->compare('langid',$this->langid,true);
		$criteria->order='ordernum desc,updated desc';
		return new CActiveDataProvider($this, array(
			'pagination'=>array(
	            'pageSize'=>20,//设置每页显示20条
	        ),
	        /*
	        'sort'=>array(
	            'defaultOrder'=>'create_time DESC', //设置默认排序是create_time倒序
	        ),
	        */
			'sort'=>false,
			'criteria'=>$criteria,
		));
	}
}