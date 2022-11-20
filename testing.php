<?php 
$con = mysqli_connect("localhost","root","","jobform");
 
 $dat = mysqli_select_db($con,"jobform");
?>

<!DOCTYPE html>
<html>
<head><title>testing</title>

 <style>

    	table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
 
}

       
       td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}



</style>
</head>
<body>

	<table>

<?php

 $sql="SELECT * FROM jobtable;";
 $result=mysqli_query($con, $sql);
 $resultcheck=mysqli_num_rows($result);

    if($resultcheck > 0){
    	while ($row=mysqli_fetch_assoc($result)){
            echo "<tr>";

            echo "<td>".$row["fullname"]."</td>";

            echo "<td>".$row["email"]."</td>";

            echo "<td>".$row["school"]."</td>";

            echo "<td>".$row["company"]."</td>";

            echo "<td>".$row["telephone"]."</td>";

            echo "<td>".$row["location"]."</td>";

            echo "<td>".$row["qualification"]."</td>";

            echo "<td>".$row["profession"]."</td>";

         	echo "</tr>";
    	}
    }


?>

</table>
</body>
</html>
