<?php
Yii::import('zii.widgets.CPortlet');
class NewArticles extends CPortlet
{	
	public $limit = 6;

	public function init(){
		$this->id="newarticles";
		$this->title = CHtml::link('更多','#',array('class'=>'news_more')).'公司新闻';
		parent::init();
	}
	
	protected function renderContent(){
		$criteria = new CDbCriteria();
		$criteria->select = 'id,title';
		$criteria->order = 'posttime desc';
		$criteria->limit = $this->limit;
		$result = Articles::model()->findAll($criteria);
		$this->render('newArticles',array('data'=>$result));
	}
}