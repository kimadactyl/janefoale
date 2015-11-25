<?php
include './include/DirectoryItems.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
   <title>Work by Jane Foale</title>
	<link href="./style.css" type="text/css" rel="Stylesheet" media="all"/> 
        <link rel="stylesheet" href="./js/lightbox/css/lightbox.css" type="text/css" media="screen" />

<!-- Lightbox plugins -->
  <script type="text/javascript" src="./js/lightbox/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="./js/lightbox/js/lightbox.js"></script>

</head>

<body>

<div id="global">

  <div id="top">
    <div id="title">
      <h1><a href="./index.php">Work by Jane Foale</a></h1>
    </div>
      
    <div id="galleries">
      <ul>
              <li class="intro"><a href="index.php?p=intro">Home</a></li>
              <li class="artist"><a href="index.php?p=artist">Artist's<br/> Statement</a></li>
              <li class="cv"><a href="index.php?p=cv">Curriculum<br/> Vitae</a></li>
              <li class="cliffe_castle"><a href="index.php?p=cliffe_castle">Cliffe <br/>Castle <br/>Museum: <br/>Residency</a></li>
              <li class="killhope"><a href="index.php?p=killhope_home">Killhope <br/>Lead Mining<br/> Museum: <br/>Residency</a></li>
              <li class="caldbeck"><a href="index.php?p=caldbeck_chroma">Caldbeck <br/>Chroma</a></li>
      </ul>
    </div>
  
    <div id="submenu">
      <p>Contact: <a href="mailto:jane@janefoale.net">jane@janefoale.net</a></p>
    </div>
  </div>
  
  <div id="content">
  
    <?php
    
    if(in_array($_GET['p'], array('killhope_home', 'killhope_making', 'killhope_finished', 'killhope_groverake'))) {
      include('./killhope_submenu.php');
    }

    if($_GET['p']) {
      $file = $_GET['p'].".php";
      @include $file;
    }
    else {
      include('./intro.php');		
    }
    
    
    ?>
  </div>

</div>


</body>
</html>
