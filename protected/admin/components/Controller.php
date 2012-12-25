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
	public $channels = array();
	//sidebar menu 
	public $sidebarmenu = array();
	/**
	 * [init description]
	 * @return [type] [description]
	 */
	public function init()
	{
		$channels = $this->getChannels();
		$menus = array();
		foreach ($channels as $channel) {
			$menu['label'] = $channel['title'];
			if ($channel['id'] == 4) {
				$menu['active'] = true;
			}else{
				$menu['active'] = false;
			}
			if ($channel['pid'] != 0) {
				$menu['url'] = $this->getChnAdminLink($channel);
				//$menus[$channel['id']] =$menu;
				$menus[$channel['pid']]['items'][] =$menu;
			}else{
				$menu['url'] = $this->getChnAdminLink($channel);
				$menus[$channel['id']] =$menu;
			}
		}
		$this->channels = $menus;
		$this->sidebarmenu = include(Yii::app()->basePath.'/admin/config/sidebarmenu.php');
		//print_r($this->sidebarmenu);
	}
	/**
	 * [getChannels description]
	 * @return [type] [description]
	 */
	public function getChannels()
	{
		$channels = Yii::app()->db->createCommand()
				    ->select('*')
				    ->from('zzdb_channels')
				    ->order('ordernum,id')
				    ->queryAll();
		return $channels;
	}
	/**
	 * [getChnAdminLink description]
	 * @param  [type] $row [description]
	 * @return [type]      [description]
	 */
	public function getChnAdminLink($row){
		$clink="";
		if($row['systemtype']==1){
			return "admin.php?inc=products&action=list";
		}elseif($row['systemtype']==2){
			return "admin.php?inc=main&action=contact";
		}elseif($row['systemtype']==3){
			return "admin.php?inc=msg&action=list";
		}
		switch($row['channeltype']){
			case 0:
			case 1:
				$clink="admin.php?inc=page&action=editpage&channelid={$row['id']}";
			break;
			case 2:
				$clink="admin.php?inc=article&action=list&channelid={$row['id']}";
			break;
			case 3:
				$clink="admin.php?inc=products&action=list";
			break;
			case 4:
				$clink="admin.php?inc=channel&action=link&channelid={$row['id']}";
			break;
		}
		return $clink;
	}

}