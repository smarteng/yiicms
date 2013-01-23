<?php
header("Content-type: text/html; charset=utf-8"); 
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
		
		//初始化menu
		$topmenu = $this->getChannels();
		$productcates = $this->getProductcate();
		$menus = array();
		foreach ($topmenu as $channel) {
			$menu['label'] = $channel['title'];
			//$menu['url'] = $this->getChnAdminLink($channel);
			$menu['url'] = array($channel['link']);
			if($channel['link'] == '#'){
				$menu['url'] = '#';
			}
			if ($channel['systemtype'] ==1) {
				$menus[$channel['id']] =$menu;
				$productMenu = $this->procuctMenuList();
				$menus[$channel['id']]['items'] =$productMenu;
			}else if ($channel['systemtype'] ==4) {
				$menus[$channel['id']] =$menu;
				$cateMenu = $this->cateMenu();
				$menus[$channel['id']]['items'] =$cateMenu;
			}else{
				if ($channel['pid'] != 0) {
					$menus[$channel['pid']]['items'][] =$menu;
				}else{
					$menus[$channel['id']] =$menu;
				}
			}	
		}
		$this->topmenus = $menus;
		//print_r($this->topmenus);
		//exit;
		parent::init();
	}
	/**
	 * [getChannels description]
	 * @return [type] [description]
	 */
	public function getChannels()
	{
		$channels = Yii::app()->db->createCommand()
				    ->select('id,pid,channeltype,systemtype,ishidden,title,link')
				    ->from('{{channels}}')
				    ->order('pid,ordernum,id')
				    ->queryAll();
		return $channels;
	}
	/**
	 * [getProductcate description]
	 * @return [type] [description]
	 */
	public function getProductcate()
	{
		$channels = Yii::app()->db->createCommand()
				    ->select('id,pid,title')
				    ->from('{{procates}}')
				    ->where('pid=0 and ishidden=0')
				    ->order('ordernum,id')
				    ->queryAll();
		return $channels;
	}
	/**
	 * [procuctList description]
	 * @return [type] [description]
	 */
	public function procuctMenuList()
	{
		$productcates = $this->getProductcate();
		foreach ($productcates as $key => $value) {
			$items[] =array(
				'label'=>$value['title'], 
				'url'=>array('product/pcate', 'pid'=>$value['id']),
			);
		}
		return $items;
	}
	/**
	 * [getCate description]
	 * @return [type] [description]
	 */
	public function getCate()
	{
		$cate = Yii::app()->db->createCommand()
				    ->select('sid,sortname')
				    ->from('{{cate}}')
				    ->order('taxis,sid')
				    ->queryAll();
		return $cate;
	}
	/**
	 * [cateMenu description]
	 * @return [type] [description]
	 */
	public function cateMenu()
	{
		$cates = $this->getCate();
		foreach ($cates as $key => $cate) {
			$items[] =array(
				'label'=>$cate['sortname'], 
				'url'=>array('article/cate', 'sid'=>$cate['sid']),
			);
		}
		return $items;
	}
}