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
	/**
	 * [init description]
	 * @return [type] [description]
	 */
	public function init(){
		//error_reporting(0);
		define('DS',DIRECTORY_SEPARATOR);
		parent::init();
	}
	/**
	 * [getUploadDir 取得上传图片路径]
	 * @param  [type] $path [description]
	 * @return [type]       [description]
	 */
	public function getUploadDir( $path )
	{
		$base = Yii::app( )->basePath.DS."..".DS."uploads".DS.$path.DS;
		if (!file_exists( $base ))
		{
			FileHelper::mkdirs( $base );
		}
		return $base;
	}
	/**
	 * [getUploadBase 取得url路径]
	 * @param  [type] $path [description]
	 * @return [type]       [description]
	 */
	public function getUploadBase( $path )
	{
		$base = "/uploads/".$path."/";
		return $base;
	}
}