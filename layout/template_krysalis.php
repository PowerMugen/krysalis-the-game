<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo WEBROOT; ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $siteInfos['title']; ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" /> 
<link rel="stylesheet" type="text/css" media="print" href="css/print.css" /> 
<link rel="stylesheet" type="text/css" media="handeld" href="css/handeld.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" /> 
<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<img src="images/logo_temp.png" alt="Krysalis" />
	<a href="home.html">home</a>
    <a href="investigation/">Enquete</a>
    <a href="investigation/enquete.html">Enquete.html</a>
	<a href="users/">Joueurs</a>    
    <a href="test/test.html"> erreur </a>
    <a href="home/contactez-nous.html"> contact </a>
    <br />
	<?php include  FILEROOT . '/modules/content.php'; ?>	
</body>
</html>
