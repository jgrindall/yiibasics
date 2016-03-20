<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',
	'defaultController'=>'main',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),

	'modules'=>array(
		'gii'=>array(
            'class'=>'system.gii.GiiModule',
            'password'=>'password',
            'newFileMode'=>0777,
            'newDirMode'=>0777
        )
	),

	// application components
	'components'=>array(

		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),

		// uncomment the following to enable URLs in path-format
		'urlManager'=>array(
			'urlFormat'=>'path',
	    'rules'=>array(
					'gii'=>'gii',
          'gii/<controller:\w+>'=>'gii/<controller>',
          'gii/<controller:\w+>/<action:\w+>'=>'gii/<controller>/<action>',
	        'post/<id:\d+>/<title:.*?>'=>'post/view',
	        'posts/<tag:.*?>'=>'post/index',
	        array('main/list', 'pattern'=>'main/<model:\w+>', 'verb'=>'GET'),
	        array('main/view', 'pattern'=>'main/<model:\w+>/<id:\d+>', 'verb'=>'GET'),
	        array('main/update', 'pattern'=>'main/<model:\w+>/<id:\d+>', 'verb'=>'PUT'),
	        array('main/delete', 'pattern'=>'main/<model:\w+>/<id:\d+>', 'verb'=>'DELETE'),
	        array('main/create', 'pattern'=>'main/<model:\w+>', 'verb'=>'POST'),
	        '<controller:\w+>/<action:\w+>'=>'<controller>/<action>'
	    )
		),


		// database settings are configured in database.php
		'db'=>require(dirname(__FILE__).'/database.php'),

		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>YII_DEBUG ? null : 'site/error',
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
