<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style_menu.css" type="text/css" media="all">

</head>
<body>
<div class="div-main">
<div class="menu">
<?php
include '_inc/dbconn.php';
include 'functions.php';

	$sql = "SELECT id, label, link, parent FROM menus ORDER BY parent, sort, label";
	$result = mysql_query( $sql) or die("database error:". mysqli_error($conn));
	// Create an array to conatin a list of items and parents
	$menus = array(
		'items' => array(),
		'parents' => array()
	);
	// Builds the array lists with data from the SQL result
	while ($items = mysql_fetch_array($result)) {
		// Create current menus item id into array
		$menus['items'][$items['id']] = $items;
		// Creates list of all items with children
		$menus['parents'][$items['parent']][] = $items['id'];
	}
	// Print all tree view menus 
	echo createTreeView(0, $menus);
	?>	
</div>
</div>

</body>
</html>