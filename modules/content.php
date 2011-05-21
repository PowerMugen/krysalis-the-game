<?php

// testing if $_GET is empty
if (empty($_GET['page'])) {
	$page = 'home';
} else {
	$page = $_GET['page'];
}

if (empty($_GET['module'])) {
	$module = 'home';
} else {
	$module = $_GET['module'];
}

/* our modules > the pages inside each module
$modules = array(
	'modules' => array(
		'investigation' => array(
			'modulePath' => 'investigation/',
			'config' => array(),
			'pages' => array(
				'index' => 'index.php',
				'enquete' => 'index.php',
			),
		),
		'users' => array(
			'modulePath' => 'users/',
			'config' => array(),
			'pages' => array(
				'index' => 'index.php',
			),
		),
		'home' => array(
			'modulePath' => 'home/',
			'config' => array(),
			'pages' => array(
				'home' => 'index.php',
				'contactez-nous' => 'index.php',
			),
		),
	),
	'pages' => array(
		'404' => '404.php'
	),
);


//case where page is defined but not module
if (isset($modules['pages'][$page])) {
	$modulePath = '';
	$pageFile = $modules['pages'][$page];
}
//case where module is defined but page is not in array
if (isset($modules['modules'][$module]) && !empty($page) && !in_array($page, $modules['modules'][$module]['pages']))  {
	$modulePath =  'modules/';
	$pageFile = '404.php';
}
//case where module and page are defined
if (isset($modules['modules'][$module]) && isset($modules['modules'][$module]['pages'][$page])) {
	$modulePath =  'modules/' . $modules['modules'][$module]['modulePath'];
	$pageFile = $modules['modules'][$module]['pages'][$page];
}

// appel du fichier à inclure
if (isset($modulePath) && isset($pageFile)) {
	$file = FILEROOT . $modulePath . $pageFile;
} else {
	$file = FILEROOT . 'modules/404.php';
}
*/

// include du fichier correspondant
//include $file;
