<?php
include './include/DirectoryItems.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
   <title>Work by Jane Foale</title>
	<link href="./style2.css" type="text/css" rel="Stylesheet" media="all"/> 
</head>

<body>

<div id="global">

<div id="content">

<?php
function displayDirectory($directory) {
	$d = new DirectoryItems($directory);
	$d->imagesOnly();
	$filearray = $d->getFileArray();
	asort($filearray);
	$i = 1; //counter for cell on row
	foreach($filearray as $key => $value) {
		if($i == 5) {
			$out .= "<a href='./$directory/$key'><img src='./$directory/thumb/$key' height='100' width='100' class='last'/></a>\n";
			$i = 1;
		}
		else {
			$out .= "<a href='./$directory/$key'><img src='./$directory/thumb/$key' height='100' width='100'/></a>\n";
			$i++;
		}
	}

	if($out) { return $out; } else { return null; }
}

if($_GET['p'] == 'prof') {
	$file = $_GET['p'].".php";
	@include $file;
}

else if($_GET['p']) {
	$file = $_GET['p'].".php";
	@include $file;
	$pics = displayDirectory($_GET['p']);
	if($pics) {
		echo "<div style='text-align: center;'>";
		echo $pics;
		echo "</div>";
	}
}
else {
	include('./intro.php');		
}


?>
</div>

<div id="top">
	<div id="title">
	<h1><a href="./index.php">
		Work<br/> 
		By <br/> 
		Jane <br/> 
		Foale</a></h1>
	</div>
	
	<div id="finished">
	<ul>
		<li class="auto"><a href="index.php?p=Autogenesis">Autogenesis</a></li>
		<li class="mole"><a href="index.php?p=Molecules">Molecules.<br/>Minerals.<br/>Matter</a></li>
		<li class="hand"><a href="index.php?p=Hand">Hand To Rock</a></li>
		<li class="start"><a href="index.php?p=prof">Professional Activities</a></li>
		
	</ul>
	</div>


</ul>


</div>

<div id="contact">
<p><strong>contact:</strong> <a href="mailto:jane@janefoale.net">jane@janefoale.net</a></p> 
</div>

</div>



</body>
</html>