<?php 

include_once('postjob.php');

?>


<!DOCTYPE html>
<html>
<head><title>xcxcxc</title>
<style>
#postingjob{
	display: none;
}

table {
	border-collapse: collapse;
	width: 50%;
    background: silver;

}

th,td {
	padding: 10px;
	border: 1px solid blue;
	

}

</style>
</head>

<body>

<table>
<tr>
   <th>id</th>
   <th>name</th>
   <th>email</th>
   <th>telephone</th>
   <th>discription</th>
   <th>jobtype</th>
   <th>city</th>
   <th>period</th>
 </tr>

 <tr>
   
   <td>bvvbvb</td>
   <td>er</td>
   <td>er</td>
   <td>er</td>
   <td>iddbxx</td>
   <td>idtrer</td>
   <td>idtyhth</td>
   <td>idghgrt</td>
  
 </tr>


 <tr>
 	<td> <?php  echo @$personnm; ?></td>
 	<td> <?php  echo @$email; ?></td>
 	<td> <?php  echo @$tele; ?></td>
 	<td> <?php  echo @$descrip; ?></td>
 	<td> <?php  echo @$jobme; ?></td>
 	<td> <?php  echo @$city; ?></td>
 	<td> <?php  echo @$period; ?></td>

 </tr>

  </table>

</body>

</html>