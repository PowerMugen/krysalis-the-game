<?php

//website infos
$siteInfos = array (
	'title' => 'Krysalis - the Game',
	'meta' => 'metaaaaaaaa',
	'owner' => 'GTFKrou',
	'base_url' => 'krysalis-the-game/',
);


// path to files
define ('FILEROOT', $_SERVER["DOCUMENT_ROOT"] . $siteInfos['base_url']);

// path to web access
define ('WEBROOT', 'http://' . $_SERVER["HTTP_HOST"] . '/' . $siteInfos['base_url']);

// path to storage
define ('UPLOADROOT', $_SERVER["DOCUMENT_ROOT"] . 'modules/storage/');

// path to admin
define ('ADMINROOT', WEBROOT . 'admin/');
