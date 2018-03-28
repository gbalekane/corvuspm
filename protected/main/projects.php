<?php 
include_once("db_connect.php");
include_once("functions.php");

?>
<!DOCTYPE html>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script>
        var $j = jQuery.noConflict();

$j(document).ready(function(){
    $j("a").click(function(){
        $j.ajax({
            url: $j(this).attr("href"),
            success: function(response) {
                $j("#Content").html(response);
            }
        });
        return false;
    });
});    </script><style>
/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #f1f1f1; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: #888; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: #555; 
}
</style>
<link rel="stylesheet" href="style.css">
<title>corvuspm</title>
</head>




<body>
<?php include 'protected/main/header.php';
include 'protected/main/sub-header.php';
?>
<div id="content" style="border-style: solid; border-color: #000000; clear:both; width:79%; float:right;margin-left:0px; height:600px;"></div>

<div style="border: medium solid #333399; background-color: #666699; width:20%;float:left;height:600px; overflow:auto">


	<h2>Menu</h2>	
	<div id="nav" style="color:white"><?php
	include 'protected/main/menu.php'; ?>
	</div>	
</div>

</body>
