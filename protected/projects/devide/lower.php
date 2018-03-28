<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div id="upper" style=" resize:vertical;overflow:auto; height:50%; width:100%; background-color:white;border-bottom-style: solid; border-bottom-width: thin; border-bottom-color: #666699;">
<div style="width:99%; background-color: #666699; padding:5px;">
<div style="text-align:right; margin-right:50px; font-size:x-large">
 <i class="active" href="#" class="fa fa-home"></i>
  <i href="protected/projects/devide/upper.php" class="fa fa-file"></i>
<i id="it" href="protected/projects/devide/upper.php" class="fa fa-save"></i>
  <i id="it2" href="protected/projects/devide/upper.php" class="fa fa-print"></i>
 <i id="it3" href="protected/projects/devide/upper.php" class="fa fa-undo"></i> 
<i id="it4" href="protected/projects/devide/upper.php" class="fa fa-envelope"></i>
<i href="protected/projects/devide/upper.php" class="fa fa-download"></i>
<i id="it5" href="protected/projects/devide/upper.php" class="fa fa-trash"></i>
</div>



</div>

<table style="width:100%;color:#666699; font-family:Arial, Helvetica, sans-serif; font-size:x-small">

<th style="color:white" bgcolor="#666699">ID</th>                       
                  		 
                        <th style="color:white"  bgcolor= "#666699">WBS </th>
                       
                        <th style="color:white"  bgcolor= "#666699">Project Name</th>
                         <th style="color:white"  bgcolor= "#666699">Type</th>
                       <th style="color:white"  bgcolor= "#666699">Colour</th>
                        <th style="color:white"  bgcolor= "#666699">Project Code</th>
                        <th style="color:white"  bgcolor= "#666699">Customer Name </th>
                        <th style="color:white"  bgcolor= "#666699">Status </th>
                        <th style="color:white"  bgcolor= "#666699">Health Status </th>
                        <th style="color:white"  bgcolor= "#666699">Progress </th>
                        <th style="color:white"  bgcolor= "#666699">Validated End</th>
                        <th style="color:white"  bgcolor= "#666699">Planned End</th>
                        <th style="color:white"  bgcolor= "#666699">Done </th>
                        <th style="color:white"  bgcolor= "#666699">Closed </th>                     


<?php
include '_inc/dbconn.php';
$select="Select * from project";
$go= mysql_query($select) or die (mysql_error());
While($proj= mysql_fetch_array($go)){
 echo "<tr><td><input type='radio' name='id' value=".$proj[0];
                           
                            echo " /></td>";
                           	
                 			
                          echo "<td >".$proj[4]."</td>";
                           echo "<td>".$proj[4]."</td>";
                            echo "<td>".$proj[4]."</td>";
                            echo "<td bgcolor=$proj[6]></td>";
                             echo "<td>".$proj[4]."</td>";
                              echo "<td>".$proj[4]."</td>";
                          echo "<td>".$proj[4]."</td>";
                           echo "<td>".$proj[4]."</td>";
                            echo "<td>".$proj[4]."</td>";
                             echo "<td>".$proj[4]."</td>";
                              echo "<td>".$proj[4]."</td>";
                               echo "<td>".$proj[4]."</td>";
                           echo "<td>".$proj[4]."</td>";     
                     
                            
               
                         echo "</tr>";
                           
   }                     
?>
</table>


</div>
<div style="width:97%; background-color:#666699; padding:5px;" >
<div style="text-align:right; margin-right:50px; font-size:x-large">
 <i class="active" href="#" class="fa fa-home"></i>
  <i id="it11" href="protected/projects/devide/upper.php" class="fa fa-file"></i>
<i onClick="document.forms['search-form'].submit()" id="it5"  class="fa fa-save"></i>
  <i id="it6" href="protected/projects/devide/upper.php" class="fa fa-print"></i>
 <i id="it7" href="protected/projects/devide/upper.php" class="fa fa-undo"></i> 
<i id="it8" href="protected/projects/devide/upper.php" class="fa fa-envelope"></i>
<i id="it9"href="protected/projects/devide/upper.php" class="fa fa-download"></i>
<i id="it10" href="protected/projects/devide/upper.php" class="fa fa-trash"></i>
</div>



</div>



<form name="search-form" id="search-form" action="protected/projects/devide/php.php" method="post" style="height:45%" >
<div style="resize:vertical;overflow-auto;height:95%; width:100%; overflow:auto; background-color:white; border-top-style: solid; border-top-width: thin; border-top-color: red;">
<div id="hide" style=" display: none; text-align:right; float:left; border: thin solid #666699;font-size:x-small; font-family:Arial, Helvetica, sans-serif; color:#666699; border-radius: 10px; width:47%; padding:10px">
<div style="width:95%;background-color:#666699; color:white; text-align:center; padding:5px">Description</div>
<div style="height: 20px; margin-top:7px; padding:5px; width:90%">
Name: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Type: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Organization<input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Customer: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Bill Contact: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Project Code: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Contract Code: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Customer Code: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Is Sub-Project Of: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Sponsor: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Manager: <input style="width:70%" ></div>

<div style="height: 20px;padding:5px; width:90%">
Colour: <input style="width:70%" ></div>


<div style="width:95%;background-color:#666699; padding:5px; color:white; text-align:center" >Description and objectives</div>
<textarea style="width:100%; height:250px; overflow:auto;  background-color:#CCCCFF; color: #666699; text-align:left">

</textarea>

</div>
<div id="hide2"  style=" display: none; float:right; border: thin solid #666699;font-size:x-small; font-family:Arial, Helvetica, sans-serif; color:#666699; border-radius: 10px; width:47%; padding:10px">

<div style="width:95%;background-color:#666699; color:white; text-align:center; padding:5px">Progress</div>
<div style="width:100%">
<div style="height: 20px;padding:5px; width:30%; float:left">
Validated Start: <input style="width:100%" ></div>
<div style="height: 20px;padding:5px; width:30% ;float:left">
Planned Start: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%;float:left">
Real Start: <input style="width:100%" ></div>
<div style="height: 20px;padding:5px; width:30%; float:left;margin-top:5px">

Validated End: <input style="width:100%;" ></div>
<div style="height: 20px;padding:5px; width:30% ;float:left;margin-top:5px">
Planned End: <input style="width:100%;" ></div>

<div style="height: 20px;padding:5px; width:30%;float:left;margin-top:5px">
Real End: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%; float:left;margin-top:5px">
Validated Duration: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30% ;float:left;margin-top:5px">
Planned Duration: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%;float:left;margin-top:5px">
Real Duration: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%; float:left;margin-top:30px">
Validated Work: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30% ;float:left;margin-top:30px">
Assigned Work: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%;float:left;margin-top:30px">
Real Work: <input style="width:100%" ></div>


<div style="height: 20px;padding:5px; width:30%; float:left;margin-top:5px">
Validated Cost: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30% ;float:left;margin-top:5px">
Assigned Cost: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%;float:left;margin-top:5px">
Real Cost: <input style="width:100%" ></div>


<div style="height: 20px;padding:5px; width:30%; float:left;margin-top:5px">
Validated Expense: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30% ;float:left;margin-top:5px">
Assigned Expense: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%;float:left;margin-top:5px">
Real Expense: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30%; float:left;margin-top:5px">
Total Cost: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:30% ;float:left;margin-top:5px">
Total Allocated: <input style="width:100%" ></div>

<div id="numero_mesa" style="height: 20px;padding:5px; width:30%;float:left;margin-top:5px">
Real Cost: <input style="width:100%" ></div>

<div style="height: 20px;padding:5px; width:100%;float:left;margin-top:15px">
Progress (%):<div style="width:10%" >  10%</div>

</div>








</div>




</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript"> 
        
               
       $("#it").click(function(){
               $("#upper").load($(this).attr("href"));
                 return false;
          });
$("#it6").click(function(){
               $("#upper").load($(this).attr("href"));
                 return false;
          });

   $(document).ready(function(){
    $("#it11").click(function(){
        $("#hide,#hide2").toggle();
    });
});

  
            
        </script>
<script >
$(document).on('submit', '#search-form', function(event) {
    event.preventDefault();
    var numero_mesa = $('#numero_mesa').val();
    $.ajax({
        type: "POST",
        url: "relatorio.php?",
        data: "numero_mesa="+ numero_mesa+
        "&products="+ products,
        success: function (data) {
            alert(data) // this will send you a message that might help you see whats going on in your php file
        });
    })
};
</script>        

</div>
</form>
