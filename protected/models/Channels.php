<?php

/**
 * This is the model class for table "{{channels}}".
 *
 * The followings are the available columns in table '{{channels}}':
 * @property string $id
 * @property string $pid
 * @property integer $channeltype
 * @property integer $systemtype
 * @property string $ordernum
 * @property integer $ishidden
 * @property string $positions
 * @property string $alias
 * @property string $title
 * @property string $content
 * @property string $seotitle
 * @property string $metakeywords
 * @property string $metadesc
 * @property string $link
 * @property integer $target
 * @property string $langid
 */
class Channels extends CActiveRecord
{
	const TYPE_PAGE=1; 
	const TYPE_LIST=2;
	const TYPE_LINK=4;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Channels the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	public function getTypeOptions()
	{
	    return array( 
	        self::TYPE_PAGE=>'单页', 
	        self::TYPE_LIST=>'文章列表',
	        self::TYPE_LINK=>'链接',
	    );
	}
	/**
	 * [getPidOptions description]
	 * @return [type] [description]
	 */
	public function getPidOptions()
	{
	    $channels = Yii::app()->db->createCommand()
				    ->select('id,title')
				    ->from('{{channels}}')
				    ->where('pid=0')
				    ->order('ordernum,id')
				    ->queryAll();
		$options = array(0=>'作为主分类');
		foreach ($channels as $key => $value) {
			$options[$value['id']]=$value['title'];
		}
	    return $options;
	}
	/**
	 * @return string the type text display for the current type
	 */
	public function getTypeText() {
	    $typeOptions = $this->getTypeOptions();
	    return isset($typeOptions[$this->token]) ? $typeOptions[$this->token] :"";
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{channels}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			//array('content', 'required'),
			array('channeltype, systemtype, ishidden, target', 'numerical', 'integerOnly'=>true),
			array('pid, ordernum, langid', 'length', 'max'=>10),
			array('positions, alias, title', 'length', 'max'=>45),
			array('seotitle, metakeywords, metadesc, link', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pid, channeltype, systemtype, ordernum, ishidden, positions, alias, title, content, seotitle, metakeywords, metadesc, link, target, langid', 'safe', 'on'=>'search'),
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
			'pid' => '上级栏目',
			'channeltype' => '频道类型',
			'systemtype' => '系统类型',
			'ordernum' => '排序',
			'ishidden' => '是否隐藏',
			'positions' => '位置',
			'alias' => '别名',
			'title' => '标题',
			'content' => '内容',
			'seotitle' => 'Seo标题',
			'metakeywords' => '关键词',
			'metadesc' => '描述',
			'link' => '链接',
			'target' => '新页面',
			'langid' => '语言',
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
		$criteria->compare('channeltype',$this->channeltype);
		$criteria->compare('systemtype',$this->systemtype);
		$criteria->compare('ordernum',$this->ordernum,true);
		$criteria->compare('ishidden',$this->ishidden);
		$criteria->compare('positions',$this->positions,true);
		$criteria->compare('alias',$this->alias,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('seotitle',$this->seotitle,true);
		$criteria->compare('metakeywords',$this->metakeywords,true);
		$criteria->compare('metadesc',$this->metadesc,true);
		$criteria->compare('link',$this->link,true);
		$criteria->compare('target',$this->target);
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