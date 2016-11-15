<?php

return array(

	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'DbHelp',
	'defaultController'=>'site',
	
	'preload'=>array('log'),
	
	'import'=>array(
		'application.models.*',
		'application.components.*',
	),
	
	'components'=>array(
	
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
			),
		),
		
		'user'=>array(            
			'loginUrl'=>array('index/login'),
			'allowAutoLogin'=>true,
		),
		
		/*
		'db'=>array(
            'class'=>'system.db.CDbConnection',
			'connectionString'=>'mysql:host=localhost;dbname=ваше_название_базы',
            'username'=>'ваш_логин',
            'password'=>'ваш_пароль',
            'charset'=>'utf8'
		),
		*/
		
	),
);