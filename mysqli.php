<plaintext>

<?php

  $fname = $email = $pass = "";
  $fnamerr = $emrr = $prr = "";


  if($_SERVER["REQUEST_METHOD"] == "POST"){

  if(empty($_POST["fname"])){
   $fnamerr = "enter name";
}

else {
	$fname = $_POST["fname"];
}

  if(empty($_POST["email"])){
   $emrr = "enter email";
}

else {
	$email = $_POST["email"];
}



  if(empty($_POST["pass"])){
   $prr = "enter password";
}

else {
	$pass = $_POST["pass"];
}


}


   $con = mysqli_connect("localhost","root","","test_connect");
   if(!$con){
   	echo "server not established";
   }

   $res =mysqli_select_db($con,"test_connect");
   if(!$res){
   	echo "connection to database wrong";
   }


   @$fname = $_POST["fname"];
    @$email = $_POST["email"];
     @$pass = $_POST["pass"];


  $sql = "insert into demotest (firstname,email,password) VALUES ('$fname','$email','$pass') ";

  if(!mysqli_query($con,$sql)){
  	echo "cant accept values";
  }




?>

<html>
<head><title>CONNECT T0 MYSQLI DATABASE</title>

<style>
  #logingpage {
	position: fixed;
	top: 20%;
	left: 35%;
	width: 25%;
	height: 360px;
	background-color: lightblue;
	text-align: center;

}

#close {
	margin-left: 90%;
	transition: all .2s ease-in-out; 
}

.lg{
	width: 300px;
	height: 50px;
	color: black;
	text-align: center;
	transition: all .2s ease-in-out; 

}

.error{
	color: red;
}




</style>
</head>

<body>
    <div id="logingpage">
      <form name ="forme" action="mysqli.php" method="POST">
      	<button onclick="kepp()" id="close">X</button>
      <LEGEND>CONNECT TO MYSQLI DATABASE</LEGEND><br>
        <label for="USERNAME">USER<span style="color:maroon">NAME</span></label><br>
    <input type="text" id="user" name="fname" class="lg" placeholder="ENTER USERNAME" value="<?php echo $fname; ?>">
    <span class="error">*<?php echo $fnamerr; ?></span>
         <BR><BR>

    <label for="email">EM<span style="color:maroon">AIL</span></label><br>
    <input type="text" id="em" name="email" class="lg" placeholder="ENTER EMAIL" value="<?php echo $email; ?>">
     <span class="error">*<?php echo $emrr; ?></span>
    <BR><BR>

    <label for="password">PASS<span style="color:maroon">WORD</span></label><br>
    <input type="text" id="ps" name="pass" class="lg" placeholder="PASSWORD REQUIRED" value="<?php echo $pass; ?>">
     <span class="error">*<?php echo $prr; ?></span>
    <BR><BR>
       <input type="submit" class="sub" value="submit">
    </form>
     </div>


  <script>
  	   function keep(){
       	document.getElementById("logingpage").style.display ="none";
       }

  </script>


 </body>
 </html>
</plaintext>