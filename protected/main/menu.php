<?php
include 'db_connect.php';
	$sql = "SELECT id, label, link, parent FROM menus ORDER BY parent, sort, label";
	$result = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
	
	// Create an array to conatin a list of items and parents
	$menus = array(
		'items' => array(),
		'parents' => array()
	);
	//$ids = array();
	// Builds the array lists with data from the SQL result
	while ($items = mysqli_fetch_assoc($result)) {
	//array_push($ids,$items['id']);
		// Create current menus item id into array
		$menus['items'][$items['id']] = $items;
		// Creates list of all items with children
		$menus['parents'][$items['parent']][] = $items['id'];
		//echo $items['id'];
	}
	
	// Print all tree view menus 
	echo "<td>";
	echo  createTreeView(0, $menus); "</td>";
	//echo $_SESSION['ids'][0];
	
	?>		