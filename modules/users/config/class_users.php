<?php

class Users_Players
{
	protected static $table = 'users';

	protected $userdata = array(
		'user_id' => array(
			'type' => self::TYPE_INT,
			'default' => null,
		),
		'user_mail_login' => array(
			'type' => self::TYPE_STRING,
			'default' => '',
		),
		'user_password' => array(
			'type' => self::TYPE_STRING,
			'default' => '',
		),

	);

}
