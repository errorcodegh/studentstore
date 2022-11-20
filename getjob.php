<?php

  $namerr = $emailrr = $locaterr = $tellrr = $schoolrr = $lastcomrr =  $qualifyrr = $profsrr = "";

   $fulln = $fulle = $sch = $precom = $cont = $locate = $qualify = $profs = "";
     


   if($_SERVER["REQUEST_METHOD"] == "POST"){  

                                      
  
     if(empty($_POST["fullnm"])){
        $namerr = "enter name";
     }

     else {
      $fulln = $_POST["fullnm"];
     }


     if(empty($_POST["fullem"])){
        $emailrr = "enter email";
     }



     if(empty($_POST["school"])){
        $schoolrr = "required field";
     }

     else {
     $sch = $_POST["school"];
     }



   if(empty($_POST["lastcom"])){
        $lastcomrr = "required field";
     }

     else {
     $precom = $_POST["lastcom"];
     }

   if(empty($_POST["contact"])){
        $tellrr = "required field";
     }

     else {
      $cont = $_POST["contact"];
     }


    if(empty($_POST["qualify"])){
        $qualifyrr = "required field";
     }

     else {
      $qualify = $_POST["qualify"];
     }

     if(empty($_POST["profs"])){
        $profsrr = "required field";
     }

     else {
      $profs = $_POST["profs"];
     }

      if(empty($_POST["locate"])){
        $locaterr = "required field";
     }

     else {
      $locate = $_POST["locate"];
     }





    


 $con = mysqli_connect("localhost","root","","jobform");
 
 $dat = mysqli_select_db($con,"jobform");
   
   @$fulln = $_POST["fullnm"];
    @$fulle = $_POST["fullem"];
     @$sch = $_POST["school"];
      @$precom = $_POST["lastcom"];
       @$cont = $_POST["contact"];
        @$locate = $_POST["loca"];
         @$profs = $_POST["profs"];
          @$qualify = $_POST["qualify"];
        
  $sql = "insert into jobtable(fullname,email,school,company,telephone,location,qualification,profession) VALUES
  ('$fulln','$fulle','$sch','$precom','$cont','$locate','$profs','$qualify')";

   if(!mysqli_query($con,$sql)){
            echo "connection problem";
         }

         
   } 


?>

<?php

if(!empty($_POST["fullnm"]) && !empty($_POST["fullem"]) && !empty($_POST["school"]) && !empty($_POST["lastcom"]) && !empty($_POST["contact"])  && !empty($_POST["loca"]) && !empty($_POST["profs"]) && !empty($_POST["qualify"])){
  header("location: come.php");
}


?>



<!DOCTYPE html>
<html>
  <head><title>ERROR CODE GET JOB</title>
  	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <style>
   #gettingjob {
   	width: 50%;
   	height: 600px;
   	background: cyan;
   	margin: 2% auto;
   padding-top: 40px;
   	line-height: 30px;

   }

   .getjj {
   	width: 50%;
   	height: 30px;
   	font-family: comic sans ms;
   	text-transform: capitalize;
   }

   .getjj:hover {
    background: cyan;
   }

   label {
   	text-shadow: 2px 2px 2px silver;
   	color: black;
   	font-weight: bold;
   }

   #sub0{
   	position: relative;
   	bottom: 0px;
   	margin-left: 85%;
   	font-weight: bold;
   	font-size: 20px;
   	text-shadow: 2px 2px 2px maroon;
   	color: white;
   }

   #close0{
   	position: relative;
   	top: -60px;
   	margin-left: 95%;
   }

  #close0:hover,#sub0:hover {
   	background: gold;
   }

.error{
  color: red;
}

h1 {
  border-bottom: 3px solid gold;
  text-shadow: 1px 1px 1px gold;
  color: black;
  margin-top: 0px;
}


 @media screen and (max-width: 460px){

  #gettingjob {
    width: 100%;
    height: 100%;
    background: cyan;
   }

     #sub0{
    position: relative;
    bottom: 0px;
    margin-left: 75%;
    font-weight: bold;
    font-size: 20px;
    text-shadow: 2px 2px 2px maroon;
    color: gold;
   }

   #close0{
    position: relative;
    top: -60px;
    margin-left: 90%;
   }



 }

 @media screen and (min-width: 700px){
 
 #gettingjob {
    width: 100%;
    height: 100vh;
    background: cyan;
    line-height: 40px;
    font-size: 20px;
   }


     #sub0{
    position: relative;
    bottom: 10%;
    margin-left: 85%;
    font-weight: bold;
    font-size: 20px;
    text-shadow: 2px 2px 2px maroon;
    color: gold;
   }

   .getjj{
    height: 60px;
    font-size: 25px;
   }


#close0{
    position: relative;
    top: -60px;
    margin-left: 90%;
    font-size: 30px;
   }
 }

 @media screen and (min-width: 1440px){
#gettingjob {
    width: 50%;
    height: 100%;
    background: cyan;
    margin: 2% auto;
   padding-top: 10px;
    line-height: 30px;

   }

   .getjj {
    width: 50%;
    height: 30px;
    font-family: comic sans ms;
    text-transform: capitalize;
   }

   h1 {
    font-size: 20px;
   }

   #close0{
    position: relative;
    top: -50px;
    margin-left: 90%;
    font-size: 20px;
   }

 }



   </style>
  </head>
   
   <body>
   	<div id="gettingjob">
      <h1>ERROR CODE GET JOB PAGE</h1>
   		<button onclick="close0()" id="close0">X</button>
      <form name="getjob" action="getjob.php" method="POST">
        
       <label for="fullname">FULLNAME</label>
       <input type="text" class="getjj" id="fullname" name="fullnm" placeholder="enter fullname" value="<?php echo $fulln; ?>">
       <span class="error">*<?php echo $namerr; ?></span>
        <br>  <br>

        <label for="email">EMAIL</label>
       <input type="text" class="getjj"  id="fullemail" name="fullem" placeholder="email required" value="<?php echo $fulle; ?>">
       <span class="error">*<?php echo $emailrr; ?></span>
       <br>  <br>
          
          <label for="profession">PROFESSION</label>
         <select id="profession" class="getjj" name="profs">
          <option value="choose one">CHOOSE ONE</option>
         	<option value="WEB DEVELOPER" >WEB DEVELOPER</option>
         	<option value="WEB DESIGNER">WEB DESIGNER</option>
         	<option value="DESKTOP APP DEVELOPER" >DESKTOP APP DEVELOPER</option>
         	<option value="NETWORK ENGINEER">NETWORK ENGINEER</option>
         	<option value="GRAPHIC DESIGNER" >GRAPHIC DESIGNER</option>
         	<option value="MOBILE APP DEVELOPER" >MOBILE APP DEVELOPER</option>
          <option value="OTHERS">OTHERS</option>
          <span class="error">*<?php echo $profsrr; ?></span>
         </select>
         
         <BR>  <br>


         <label for="qualify">QUALIFICATION</label>
         <select id="qual" class="getjj" name="qualify">
          <option value="CHOOSE ONE">CHOOSE ONE</option>
         	<option value="PHP">PHD</option>
         	<option value="MASTERS">MASTERS</option>
         	<option value="DEGREE">DEGREE</option>
         	<option value="HND">HND</option>
         	<option value="CERTIFICATE">CERTIFICATE</option>
         	<option value="OTHERS">OTHERS</option>
          <span class="error">*<?php echo $qualifyrr; ?></span>
         </select>

         <br>  <br>

         <label for="school">SCHOOL</label>
         <input type="text" id="sch" class="getjj" name="school" placeholder="institution attend" value="<?php echo $sch; ?>">
         <span class="error">*<?php echo $schoolrr; ?></span>
           <br>  <br>

         <label for="last">PREVIUS /CURRENT COMPANY</label>
           <input type="text" id="last" class="getjj" name="lastcom" placeholder="previous company" value="<?php echo $precom; ?>">
           <span class="error">*<?php echo $lastcomrr; ?></span>
             <br>   <br>

           <label for="telephone">TELLEPHONE</label>
           <input type="text" id="cont" class="getjj" name="contact" placeholder="contact number" value="<?php echo $cont;?>">
           <span class="error">*<?php echo $tellrr; ?></span>
              <br>  <br>

           <label for="loca">YOUR RESIDENCE</label>
           <input type="text" class="getjj" id="locate" name="loca" placeholder="town /city" value="<?php echo $locate;?>">
           <span class="error">*<?php echo $locaterr; ?></span>
           <br>

            <button type="submit" name="subme" id="sub0">SUBMIT</button>
          </form>
        </div>

        
        <script>
              function close0(){
              	document.getElementById("gettingjob").style.display= "none";
              }
        
      
      </script>

</form>
</div>
</body>
</html>



table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  height: 70px;
  font-size: 30px;
 
}

       
       td, th {
  border: 3px solid gold;
  text-align: left;
  padding: 8px;
  font-size: 40px;
}

h1 {
    color: gold;
    display: inline-block;
}

@media only screen and (min-width: 240px) and (max-width: 767px){
    h1 {
        width: 100%;
        text-shadow: 2px 2px 2px black;
        color: silver;
        font-weight: bold;
        text-align: center;
        margin-left: 100px;
    }
    
    table {
        width: 100%;
        height: 80px;
        line-height: 60px;
        font-size: 18px;
    }
    
    td,th {
        font-size: 20px;
    }
}

@media only screen and (min-width: 1280px) and (max-width: 1440px){
    
      table {
        width: 100%;
        height: 80px;
        line-height: 60px;
        font-size: 18px;
    }
    
     td,th {
        font-size: 20px;
    }
    
    

}



