<?php

// tableau associatif permettant de récupérer les pages dans les modules
$pages = array(
	null => 'home/index.php',
	'home' => 'home/index.php',
	'404' => '404.php',
	'enquete' => 'investigation/index.php',
);

//echo '<pre>';
//var_dump($_GET);
//echo '</pre>';

// lorqu'une page est appelée elle est vide ou renvoi au tableau associatif
if(empty($_GET)) {
    $page = null;
} else {
	$page = $_GET['page'];
}

// appel du fichier à inclure
$file = FILEROOT . '/modules/' . $pages[$page];

// include du fichier correspondant
if (isset($pages[$page]) && is_file($file)) {
   include $file;
};

?>
