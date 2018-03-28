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

<table style="width:100%;color:#666699; font-family:Arial, Helvetica, sans-serif;font-size:x-small">

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
                           	
                 			
                          echo "<td>".$proj[4]."</td>";
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