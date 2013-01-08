<?php
Yii::import('zii.widgets.CPortlet');
class HotCates extends CPortlet
{	public $limit = 10;

	public function init(){
		$this->id="hotcates";
		$this->title = '热门类目';
		parent::init();
	}
	
	protected function renderContent(){
		$criteria = new CDbCriteria();
		//$criteria->condition = 'parent_cid !=0';
		$criteria->order = 'oporder desc , click desc';
		$criteria->limit = $this->limit;
		$result = Cates::model()->findAll($criteria);
		$this->render('hotCates',array('data'=>$result));
	}
}