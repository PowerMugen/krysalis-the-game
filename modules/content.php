<?php

// testing if $_GET is empty
if(empty($_GET)) {
	//go back home you monster
    $page = 'home';
	$module = 'base';
} else {
	$module = $_GET['module'];
	$page = $_GET['page'];
}

// our modules
$modules = array (
	'base' => '',
	'home' => 'home/',
	'investigation' => 'investigation/',
);

//testing if module exists
if(isset($modules[$module])) {
	//get module
	$module = $_GET['module'];
} else {
	//show error page
	$module = 'base';
}

// then the pages
$pages = array(
	'home' => $modules[$module] . 'index.php',
	'404' => '404.php',
	'enquete' => $modules[$module] . 'index.php',
);

//testing if page exists
if(isset($pages[$page])) {
	//show page
	$page = $_GET['page'];
} else {
	//show error page
	$page = '404';
}


// appel du fichier à inclure
$file = FILEROOT . '/modules/' . $pages[$page];

// include du fichier correspondant
if (isset($pages[$page]) && is_file($file)) {
   include $file;
};

?>
