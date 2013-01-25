<?php

/**
 * This is the model class for table "{{products}}".
 *
 * The followings are the available columns in table '{{products}}':
 * @property string $id
 * @property string $pid
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
	const TYPE_COMMON=0; 
	const TYPE_RECOMMEND=1;
	const TYPE_HOT=2;
	protected static $_pidOptions = NULL;
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
	 * [beforeValidate description]
	 * @return [type] [description]
	 */
	protected function beforeValidate() {
 
        if ($this->isNewRecord) {
        	$this->hits = 0;
			$this->posttime = time();
        }
        return parent::beforeValidate();
    }
	/**
	 * [getTypeOptions description]
	 * @return [type] [description]
	 */
	public function getTypeOptions()
	{
	    return array( 
	        self::TYPE_COMMON=>'普通产品', 
	        self::TYPE_RECOMMEND=>'推荐产品',
	        self::TYPE_HOT=>'热门产品',
	    );
	}
	/**
	 * [getLevelOptions description]
	 * @return [type] [description]
	 */
	public function getLevelOptions()
	{
		 return array( 
	        1=>'★☆☆☆☆', 
	        2=>'★★☆☆☆',
	        3=>'★★★☆☆',
	        4=>'★★★★☆',
	        5=>'★★★★★',
	    );
	}
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{products}}';
	}
	/**
	 * @return string the type text display for the current type
	 */
	public function getPidText() {
		if (!isset(self::$_pidOptions)) {
			self::$_pidOptions = Procates::model()->getPidOptions();
		}
	    return isset(self::$_pidOptions[$this->pid]) ? self::$_pidOptions[$this->pid] :"主分类";
	}
	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pid, content', 'required'),
			array('type, level', 'numerical', 'integerOnly'=>true),
			array('price1, price2', 'numerical'),
			array('pid, cid, hits, posttime, store, sold, ordernum, langid', 'length', 'max'=>10),
			array('alias, seotitle, metakeywords, metadesc, picpaths', 'length', 'max'=>255),
			array('name, picids', 'length', 'max'=>100),
			array('serialnum', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, pid, cid, type, hits, posttime, alias, name, serialnum, seotitle, metakeywords, metadesc, content, picids, picpaths, price1, price2, store, sold, level, ordernum, langid', 'safe', 'on'=>'search'),
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
			'pid' => '主分类',
			'cid' => '二级分类',
			'type' => '类型',
			'hits' => '点击',
			'posttime' => '发布时间',
			'alias' => '别名',
			'name' => '产品名称',
			'serialnum' => '编号',
			'seotitle' => 'SEO标题',
			'metakeywords' => '关键词',
			'metadesc' => '产品描述',
			'content' => '产品内容',
			'picids' => '淘宝商品ID',
			'picpaths' => '图片地址',
			'price1' => '公司价',
			'price2' => '市场价',
			'store' => '库存',
			'sold' => '售出',
			'level' => '产品等级',
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
		$criteria->compare('pid',$this->pid,true);
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
		$criteria->order='posttime desc';
		return new CActiveDataProvider($this, array(
			'pagination'=>array(
	            'pageSize'=>20,//设置每页显示20条
	        ),
	        /*
	        'sort'=>array(
	            'defaultOrder'=>'posttime DESC', //设置默认排序是create_time倒序
	        ),
	        */
			'sort'=>false,
			'criteria'=>$criteria,
		));
	}
}