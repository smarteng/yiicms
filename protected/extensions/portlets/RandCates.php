<?php
Yii::import('zii.widgets.CPortlet');
class RandCates extends CPortlet
{	public $limit = 10;

	public function init(){
		$this->id="hotcates";
		$this->title = '随机类目';
		parent::init();
	}
	
	protected function renderContent(){
		$criteria = new CDbCriteria();
		$criteria->condition = 'parent_cid !=0';
		$criteria->order = 'rand(), click desc';
		$criteria->limit = $this->limit;
		$result = Cates::model()->findAll($criteria);
		$this->render('randCates',array('data'=>$result));
	}
}