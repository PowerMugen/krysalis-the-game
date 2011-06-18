<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<base href="<?php echo WEBROOT; ?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $siteInfos['title']; ?></title>
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css" /> 
<link rel="stylesheet" type="text/css" media="print" href="css/print.css" /> 
<link rel="stylesheet" type="text/css" media="handeld" href="css/handeld.css" />
<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" /> 
<script src="js/jquery1.6.1.js" type="text/javascript"></script>
<script src="js/functions.js" type="text/javascript"></script>
</head>
<body>
	<div id="centrage">
	<?php include  FILEROOT.'layout/partials/header.php'; ?>	
	<?php include  FILEROOT.'layout/partials/menu_main.php'; ?>	
	<!--<img src="images/logo_temp.png" alt="Krysalis" />-->
	
  <?php include  FILEROOT.'modules/content.php'; ?>	
  <!--<div class="flleft">flleft</div>
  <div class="flright">flright</div>
	<br class="clear" /> 
  <div>retourdans le flux</div>-->
</body>
</html>
