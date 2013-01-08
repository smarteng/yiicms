<?php
Yii::import('zii.widgets.CPortlet');
class RandArticles extends CPortlet
{	
	public $limit = 12;

	public function init(){
		$this->id="newarticles";
		$this->title = '随机文章';
		parent::init();
	}
	
	protected function renderContent(){
		$criteria = new CDbCriteria();
		$criteria->select = 'id,title';
		$criteria->order = 'rand(),createtime desc';
		$criteria->limit = $this->limit;
		$result = Article::model()->findAll($criteria);
		$this->render('newArticles',array('data'=>$result));
	}
}