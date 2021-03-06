<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.

$backend = dirname( dirname( __FILE__ ) );
$frontend = dirname( $backend );
Yii::setpathofalias( "backend", $backend );
Yii::setPathOfAlias('bootstrap', $backend.'/extensions/bootstrap');

$frontendArray = require( $frontend."/config/main.php" );
unset( $frontendArray['components']['urlManager'] );
unset( $frontendArray['modules'] );
unset( $frontendArray['import'] );
$backmain =  array(
	//'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'后台管理',
	"language" => "zh_cn",
	"charset" => "utf-8",
	"timeZone" => "Asia/Chongqing",

	"basePath" => $frontend,//controll application path
	"controllerPath" => $backend."/controllers",
	"viewPath" => $backend."/views",
	"modulePath" => $backend."/modules",
	//"extPath" => $backend."/extensions",
	"runtimePath" => $backend."/../runtime/backend",
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'backend.models.*',
		'backend.components.*',
		'backend.extensions.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'sa',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		'format'=>array(
                'datetimeFormat' => 'Y-m-d h:i', 
        ),
		'urlManager'=>array(
			'urlFormat'=>'path',
			//'urlSuffix'=>'.html',
			/*
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
			*/
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				
				array(
					'class'=>'CWebLogRoute',
				),
				
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
);
$config = new CMap( $frontendArray );
$config->mergeWith( $backmain );
$config = $config->toArray( );
return $config;