<?php
Yii::import('zii.widgets.CPortlet');
class NewArticles extends CPortlet
{	
	public $limit = 6;

	public function init(){
		$this->id="newarticles";
		$this->title = '网购知识'.CHtml::link('更多','#',array('class'=>'news_more'));
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