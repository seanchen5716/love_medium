<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Domain
	|--------------------------------------------------------------------------
	|
	| Enter your Domain name here
	| eg) 'domain' => 'example.com'
	|
	| Don't enter it as www.example.com or http://example.com
	|
	*/

	'domain' => 'things.pe',

	'fetch' => PDO::FETCH_CLASS,

	'default' => 'mysql',

	'connections' => array(

		'mysql' => array(
			'driver'    => 'mysql',
			'host'      => 'localhost',
			'database'  => 'lovemedium',
			'username'  => 'root',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		)
	),

	'migrations' => 'migrations',

	'logo'		=> 'logo.png',				/* Logo should be uploaded in public/assets/images */

	'email'		=> 'info@rumblr.biz',

);
