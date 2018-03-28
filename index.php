<?php 
include('db_connect.php');
include('functions.php');



            ?>


<!DOCTYPE html>
<html>
<head>
<style>
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
<div id="include" style="border-style: solid; border-color: #000000; clear:both; width:79%; float:right;margin-left:0px; height:600px;">tt</div>

  

<div style="border: medium solid #333399; background-color: #666699; width:20%;float:left;height:600px; overflow:auto">


	<h2>Menu</h2>	
	<div id="nav" style="color:white"><?php
	include 'protected/main/menu.php'; 
	
	?>
	</div>	
</div> 
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

        <script type="text/javascript"> 
        
        $("a").click(function(){
                $("#include").load($(this).attr("href"));
                 return false;
          });
       
       $("a").click(function(){
               $("#upper").load($(this).attr("href"));
                 return false;
          });

      
            
        </script>
        
        
      
</body>
</html>
