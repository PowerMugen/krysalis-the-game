<?php

// testing if $_GET is empty
if (empty($_GET['page'])) {
	$page = 'index';

} else {
	$page = $_GET['page'];
}

if (empty($_GET['module'])) {
	$module = 'home';

} else {
	$module = $_GET['module'];
}

if (!file_exists($path = FILEROOT.'/modules/'.$module.'/'.$page.'.php')) {

	require_once FILEROOT.'/config/routes.php';

	if (Routes::isSpecific($module, $page)) {
		$path = Routes::definePath($module, $page);
	}

	$path = FILEROOT.'/404.php';
}

echo 'include '.$module.'/'.$page;

/* our modules > the pages inside each module


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
include $path;
