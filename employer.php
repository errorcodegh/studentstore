 
<?php 

$conn = mysqli_connect("localhost","root","","postjob");
$active = mysqli_select_db($conn,"postjob");

?>


<!DOCTYPE html>
<html>
<head><title>CONTACT YOUR EMPLOYER</title>
<meta name="viewport" content="width=device-width,  scalable=no">
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  height: 100px;
 
}

       
       td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 30px;
}

h1 {
  color: gold;
  display: block;
}

@media screen and (min-width: 240px) and (max-width: 640px){
  h1 {
  
  }
}




</style>
</head>

<body>
	<table>
		<tr>

      <h1>PLEASE NOTE: THIS PAGE INFORMATIONS BELOW ARE POST JOBS CREDENTIALS 
       OF OUR EMPLOYER...PLEASE DO NOTE THAT,THERE IS NO MIDDLEMAN HERE.CONTACT 
       PERSONELL WITH RESPECT,AS ANY MISCONDUCT CAN LEAD TO JOB TERMINATION...THANK YOU.</h1>
            <th>COMPANY NAME</th>
            <th>EMAIL</th>
            <th>TELEPHONE</th>
            <th>JOB DESCRIPTION</th>
            <th>JOB TYPE</th>
            <th>LOCATION</th>
            <th>PERIOD</th>
		</tr>

   <?php
     
     $sql = "SELECT * FROM postform;";
     $result = mysqli_query($conn,$sql);
     $resultcheck = mysqli_num_rows($result);

        if($resultcheck > 0){
        	while ($row=mysqli_fetch_assoc($result)){

        		 echo "<tr>";

                   echo "<td>".$row["name"]."</td>";

                   echo "<td>".$row["email"]."</td>";

                   echo "<td>".$row["telephone"]."</td>";

                   echo "<td>".$row["description"]."</td>";

                   echo "<td>".$row["jobtype"]."</td>";

                   echo "<td>".$row["city"]."</td>";

                   echo "<td>".$row["period"]."</td>";

                  echo "</tr>";



        	}

        }




  ?>

    </table>
	</body>
	</html>
	