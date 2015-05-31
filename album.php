<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
  <?php 
    if (isset($_GET['album'])) {
	  echo $_GET['album'];
	} else {
	  echo 'Photo Gallery';
	}
  ?>
</title>

<!-- start gallery header --> 
<link rel="stylesheet" type="text/css" href="folio-gallery.css" />
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="colorbox/colorbox.css" />
<!--<link rel="stylesheet" type="text/css" href="fancybox/fancybox.css" />-->
<script type="text/javascript" src="colorbox/jquery.colorbox-min.js"></script>
<!--<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.1.min.js"></script>-->
<script type="text/javascript">
$(document).ready(function() {	
	
	// colorbox settings
	$(".albumpix").colorbox({rel:'albumpix'});
	
	// fancy box settings
	/*
	$("a.albumpix").fancybox({
		'autoScale	'		: true, 
		'hideOnOverlayClick': true,
		'hideOnContentClick': true
	});
	*/
});
</script>
<link rel="stylesheet" title="Standard" href="styles.css" type="text/css" media="screen" />

    <script language="JavaScript" type="text/javascript" src="contentflow.js"></script>
<!-- end gallery header -->
</head>
 <h1 id="title"><img src="img/title.png"></h1>
    <h3 style="text-align:center; margin: 0 0px 30px 35px; text-decoration: none;"> modern waterpainting</h3>
    
   <ul id="menu">
        <li><a href="index.html">homepage</a></li>
        <li><a href="intro.html">introduction</a></li>
        <li><a href="exp.html">experience</a></li>
        <li><a href="album.html">album</a></li>
        <li><a href="mailto:johnny83721@gmail.com">contact</a></li>
    </ul>

<body sytle="background-color:#000;">

<div class="gallery">  
  <?php include "folio-gallery.php"; ?>
</div>   

</body>
</html>