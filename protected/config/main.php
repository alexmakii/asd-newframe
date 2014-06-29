<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.modules.user.models.*',
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool

		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'!!qaz67df',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		'user' => array(
			'debug' => false,
			'userTable' => 'user',
			'translationTable' => 'translation',
			'passwordRequirements' => array( 'minLen' => 4, 'maxLen' => 25, ),
			'language' => 'ru',
		),
		'usergroup' => array(
			'usergroupTable' => 'usergroup',
			'usergroupMessageTable' => 'user_group_message',
		),
		'membership' => array(
			'membershipTable' => 'membership',
			'paymentTable' => 'payment',
		),
		'friendship' => array(
			'friendshipTable' => 'friendship',
		),
		'profile' => array(
			'privacySettingTable' => 'privacysetting',
			'profileTable' => 'profile',
			'profileCommentTable' => 'profile_comment',
			'profileVisitTable' => 'profile_visit',
		),
		'registration' => array(
			'enableActivationConfirmation' => false,
		),
		'role' => array(
			'roleTable' => 'role',
			'userRoleTable' => 'user_role',
			'actionTable' => 'action',
			'permissionTable' => 'permission',
		),
		'message' => array(
			'messageTable' => 'message',
		),
//		'user' => array(
//			'debug' => true,
//		),
//		'test',
//		'charsheets',
		'evil_dm',
		'admin',

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
//			'allowAutoLogin'=>true,

			'class' => 'application.modules.user.components.YumWebUser',
			'allowAutoLogin'=>true,
			'loginUrl' => array('//user/auth/login'),
//			'passwordRequirements' => array( 'minLen' => 4, 'maxLen' => 25, ),
//			'language' => 'ru',

		),
		'cache' => array(
			'class' => 'CFileCache',
		),
		// uncomment the following to enable URLs in path-format

		'urlManager'=>array(
			'urlFormat'=>'path',
			'useStrictParsing'=>true,
			'showScriptName' => false,
			'rules'=>array(
//				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
//				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
//				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
//				'/' => 'test/',
				'/evil_dm/person' => '/evil_dm/charsheets/person',
				'/evil_dm/index' => '/evil_dm/charsheets/',
				'/evil_dm/' => '/evil_dm/charsheets/',
				'/registration' => '/registration/registration/registration/',
				'index.php' => '/',
				'<module:\w+>' => '<module>',
				'<module:\w+>/<controller:\w+>'=>'<module>/<controller>',
				'<module:\w+>/<controller:\w+>/<action:\w+>'=>'<module>/<controller>/<action>',
				'<module:\w+>/<controller:\w+>/<action:\w+>/*'=>'<module>/<controller>/<action>',
			),
		),

		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
		// uncomment the following to use a MySQL database

		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_learn',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '!!qaz67df',
			'charset' => 'utf8',
			'tablePrefix' => '',
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
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);