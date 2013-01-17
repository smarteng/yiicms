<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class Controller extends CController
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	//top menu
	public $topmenus = array();
	/**
	 * [init description]
	 * @return [type] [description]
	 */
	public function init(){
		//error_reporting(0);
		define('DS',DIRECTORY_SEPARATOR);
		/*
		//初始化menu
		$topmenu = $this->getChannels();
		$menus = array();
		foreach ($topmenu as $channel) {
			$menu['label'] = $channel['title'];
			$menu['linkOptions'] = array('target'=>'main');
			$menu['url'] = $this->getChnAdminLink($channel);
			if ($channel['id'] == 4) {
				$menu['active'] = true;
			}else{
				$menu['active'] = false;
			}
			if ($channel['pid'] != 0) {
				$menus[$channel['pid']]['items'][] =$menu;
			}else{
				$menus[$channel['id']] =$menu;
			}
		}
		$this->topmenus = $menus;
		*/
		parent::init();
	}
	/**
	 * [getChannels description]
	 * @return [type] [description]
	 */
	public function getChannels()
	{
		$channels = Yii::app()->db->createCommand()
				    ->select('id,title')
				    ->from('{{channels}}')
				    ->order('ordernum,id')
				    ->queryAll();
		return $channels;
	}
}