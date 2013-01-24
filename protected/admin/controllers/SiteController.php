<?php
header("Content-type: text/html; charset=utf-8"); 
class SiteController extends Controller
{
	//top menu
	public $channels = array();
	//sidebar menu 
	public $sidebarmenu = array();

	/**
	 * [getChannels description]
	 * @return [type] [description]
	 */
	public function getChannels()
	{
		$channels = Yii::app()->db->createCommand()
				    ->select('id,pid,title')
				    ->from('{{channels}}')
				    ->order('pid,ordernum,id')
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
			//return "admin.php?inc=products&action=list";
			return $this->createUrl('goods/index',array( 'cid'=>'222'));
		}elseif($row['systemtype']==2){
			//return "admin.php?inc=main&action=contact";
			return $this->createUrl('goods/index',array( 'cid'=>'222'));
		}elseif($row['systemtype']==3){
			//return "admin.php?inc=msg&action=list";
			return $this->createUrl('goods/index',array( 'cid'=>'222'));
		}
		switch($row['channeltype']){
			case 0:
			case 1:
				$clink = $this->createUrl('goods/index',array( 'cid'=>'222'));
			break;
			case 2:
				$clink = $this->createUrl('goods/index',array( 'cid'=>'222'));
			break;
			case 3:
				$clink = $this->createUrl('goods/index',array( 'cid'=>'222'));
			break;
			case 4:
				$clink = $this->createUrl('goods/index',array( 'cid'=>'222'));
			break;
		}
		return $clink;
	}
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$channels = $this->getChannels();
		$menus = array();
		foreach ($channels as $channel) {
			$menu['label'] = $channel['title'];
			$menu['linkOptions'] = array('target'=>'main');
			$menu['url'] = $this->getChnAdminLink($channel);
			if ($channel['pid'] != 0) {
				$menus[$channel['pid']]['items'][] =$menu;
			}else{
				$menus[$channel['id']] =$menu;
			}
		}
		$this->channels = $menus;
		//var_dump($this->channels);
		//exit;
		$this->sidebarmenu = include(Yii::app()->basePath.'/admin/config/sidebarmenu.php');
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->renderPartial('index');
	}
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionWelcome()
	{
		// renders the view file 'protected/views/site/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('welcome');
	}
	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}
	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$name='=?UTF-8?B?'.base64_encode($model->name).'?=';
				$subject='=?UTF-8?B?'.base64_encode($model->subject).'?=';
				$headers="From: $name <{$model->email}>\r\n".
					"Reply-To: {$model->email}\r\n".
					"MIME-Version: 1.0\r\n".
					"Content-type: text/plain; charset=UTF-8";

				mail(Yii::app()->params['adminEmail'],$subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(Yii::app()->user->returnUrl);
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
}