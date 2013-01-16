<?php

/**
 * This is the model class for table "{{slideshow}}".
 *
 * The followings are the available columns in table '{{slideshow}}':
 * @property integer $id
 * @property string $title
 * @property string $url
 * @property string $image
 * @property integer $token
 * @property integer $sortnum
 * @property integer $created
 */
class Slideshow extends CActiveRecord
{
	const TYPE_INDEX=1; 
	const TYPE_LIST=2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Slideshow the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getTypeOptions()
	{
	    return array( 
	        self::TYPE_INDEX=>'首页焦点图', 
	        self::TYPE_LIST=>'频道页100%*100',
	    );
	}
	/**
	 * @return string the type text display for the current type
	 */
	public function getTypeText() {
	    $typeOptions = $this->getTypeOptions();
	    return isset($typeOptions[$this->token]) ? $typeOptions[$this->token] :"";
	}
	/**
     * Prepares posttime  attributes before performing validation.
     */
    protected function beforeValidate() {
 
        if ($this->isNewRecord) {
			$this->created = time();
        }
        return parent::beforeValidate();
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{slideshow}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, url, token', 'required'),
			array('token, sortnum, created', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>90),
			array('url', 'length', 'max'=>100),
			//array('image', 'length', 'max'=>50),
			array('image', 'file',"allowEmpty" => TRUE,'types'=>'jpg,gif,jpeg,png',"maxSize" => 409600),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, title, url, image, token, sortnum, created', 'safe', 'on'=>'search'),
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
			'title' => '链接标题',
			'url' => '链接URL',
			'image' => '幻灯片图片',
			'token' => '位置',
			'sortnum' => '排序',
			'created' => '时间',
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
		$criteria->compare('title',$this->title,true);
		$criteria->compare('url',$this->url,true);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('token',$this->token);
		$criteria->compare('sortnum',$this->sortnum);
		$criteria->compare('created',$this->created);

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