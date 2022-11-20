<?php

$con = mysqli_connect("localhost","root","","jobform");
 mysqli_select_db($con,"jobform");



$sql="SELECT * FROM jobtable (fullname,email,school,company,telephone,location,qualification,profession)";

$records=mysqli_query($sql,$con);


?>


<!DOCTYPE html>
<html>
<head><title>THE RECIEVED PAGE</title>
<style>
  
  table{
  	width: 600px;
    border: 1px;
    padding: 20px;
  }

</style>
</head>

<body>
   <table>
     <tr>
     	<th>fullname</th>
     	<th>email</th>
     	<th>school</th>
     	<th>company</th>
     	<th>telephone</th>
     	<th>location</th>
     	<th>qualification</th>
     	<th>profession</th>
     </tr>

     <?php
 
         while($jobtable=mysql_fetch_assoc($records)){

         	echo "<tr>";

            echo "<td>".$jobtable["fullname"]."</td>";

            echo "<td>".$jobtable["email"]."</td>";

            echo "<td>".$jobtable["school"]."</td>";

            echo "<td>".$jobtable["company"]."</td>";

            echo "<td>".$jobtable["telephone"]."</td>";

            echo "<td>".$jobtable["location"]."</td>";

            echo "<td>".$jobtable["qualification"]."</td>";

            echo "<td>".$jobtable["profession"]."</td>";

         	echo "</tr>";


         }



     ?>


     </table>
	</body>
	</html>