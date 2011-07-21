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

	$path = FILEROOT.'/modules/404.php';
}

// include des fichiers correspondant

//ajout de la config du module
$moduleConfig = FILEROOT.'modules/' . $module . '/config/class_' . $module . '.php';

if (file_exists($moduleConfig)) {
    include $moduleConfig;
}
//ajout du fichier de contenu
include $path;
