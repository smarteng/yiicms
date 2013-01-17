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
	protected static $_pidOptions = NULL;
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
	 * [getPidOptions description]
	 * @return [type] [description]
	 */
	public function getPidOptions()
	{
	    $pids = Yii::app()->db->createCommand()
				    ->select('id,title')
				    ->from('{{procates}}')
				    ->where('pid=0')
				    ->order('ordernum,id')
				    ->queryAll();
		$options = array(0=>'作为主分类');
		foreach ($pids as $key => $value) {
			$options[$value['id']]=$value['title'];
		}
	    return $options;
	}
	/**
	 * @return string the type text display for the current type
	 */
	public function getPidText() {
		if (!isset(self::$_pidOptions)) {
			self::$_pidOptions = $this->getPidOptions();
		}
	    return isset(self::$_pidOptions[$this->pid]) ? self::$_pidOptions[$this->pid] :"主分类";
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
			'pid' => '父ID',
			'ordernum' => '排序',
			'ishidden' => '是否隐藏',
			'alias' => '别名',
			'title' => '分类名称',
			'seotitle' => 'SEO标题',
			'metakeywords' => '关键词',
			'metadesc' => '分类描述',
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