<?php
  

$personnm = $emaill = $tele = $descrip = $jobme = $city = $period =  "";
$personrr = $emailrr = $tellrr = $descriprr = $jobrr = $cityrr = $periodrr = "";

  if($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(!empty($_POST["person"])){
    	$personnm = $_POST["person"];
    	
    }

    else {
       $personrr = "name required";
    }


     if(!empty($_POST["eml"])){
      $emaill = $_POST["eml"];
    }

    else {
      $emailrr = "email required";
    }

    if(!empty($_POST["tele"])){
      $tele = $_POST["tele"];
    }

    else {
      $tellrr = "telephone required";
    }


    if(!empty($_POST["desc"])){
      $descrip = $_POST["desc"];
    }

    else {
      $descriprr = "job description";
    }

    if(!empty($_POST["jobthing"])){
      $jobme = $_POST["jobthing"];
    }

    else {
    	$jobrr = "select somthing";
    }

    if(!empty($_POST["towns"])){
      $city = $_POST["towns"];
    }

    else {
    	$cityrr = "select town";
    }

    if(!empty($_POST["duration"])){
      $period = $_POST["duration"];
    }

    else {
    	$periodrr = "select one";
    }


    $con = mysqli_connect("localhost","root","","postjob");
    $const = mysqli_select_db($con,"postjob");
     

        @$personnm = $_POST["person"];
         @$emaill = $_POST["eml"];
          @$tele = $_POST["tele"];
           @$descrip = $_POST["desc"];
            @$jobme = $_POST["jobthing"];
            @$city = $_POST["towns"];
             @$period = $_POST["duration"];


           
     $sql = "insert into postform(name,email,telephone,description,jobtype,city,period) VALUES ('$personnm','$emaill','$tele','$descrip','$jobme','$city','$period')";

     $fecth = mysqli_query($con,$sql);
       if(!$fecth){
       	echo "not send";
       }

    



   }
?>


<!DOCTYPE html>
<html>
<head><title>ERROR CODE JOB POSTING</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    

   #postingjob {
       	width: 40%;
       	height: 80vh;
       	background: cyan;
       	margin: 5% auto;
       	padding: 20px;

       }

       h1 {
       	border-bottom: 3px solid silver;
       	text-shadow: 1px 1px 1px white;
       	color: silver;
       }

       .ppp{
       	width: 60%;
       	height: 40px;
       }

       .ppp:hover{
       	background: cyan;
       }

       label {
       	font-weight: bold;
       	text-shadow: 1px 1px 1px gold;
       }

       #subb22 {
       	position: absolute;
       	bottom: 10%;
       	right: 25%;
       	font-weight: bold;
       	font-size: 20px;
       }

       #closeme {
       	position: absolute;
       	top: 13%;
       	right: 25%;
       }

       .error{
       	color: blue;
       }




       @media screen and (min-width: 320px) and (max-width: 500px){

        #postingjob {
       	width: 100vw;
       	height: auto;
       	background: cyan;
       	padding: 0px;
       	margin: 0px;
       	border: 0px;
       }

      

       #closeme {
       	position: absolute;
       	top: 10px;
       	right: 0px;
       }

       
       #subb22 {
       	position: absolute;
       	bottom: -130px;
       	right: 0px;
       }

   }

  @media screen and (min-width: 768px) and (max-width: 1200px){

#postingjob {
       	width: 100vw;
       	height: 100%;
       	background: cyan;
       	padding: 0px;
       	margin: 0px;
       	border: 0px;
       	line-height: 35px;
       }

 #subb22 {
       	position: absolute;
       	bottom: 0px;
       	right: 0px;
       }

#closeme {
       	position: absolute;
       	top: 60px;
       	right: 0px;
       }

  }

 @media screen and (min-width: 1200px) and (max-width: 1440px){

#postingjob{
	width: 70%;
	height: 100vh;
	margin: 10px auto;
	font-size: 15px;
	line-height: 40px;
}



  .ppp{
       	width: 40%;
       	height: 40px;
       	font-size: 20px;
       	font-family: comic sans ms;
       	font-weight: bold;
       }

 h1 {
       	border-bottom: 3px solid gold;
       	text-shadow: 1px 1px 1px white;
       	color: silver;
       }

#subb33 {
       	position: absolute;
        bottom: 0px;
        left: 0px;
       	font-weight: bold;
       	font-size: 25px;
       }

        #endme {
        position: absolute;
        top: 0px;
        left: 0px;
       }




 }









</style>
</head>

    <body>
    	<div id="postingjob">
    		<button onclick="closeme()" id="endme">X</button>
      <form name="postjob" action="postjob.php" method="POST">
      	   <h1>POST A JOB TO ERROR CODE SOLVED</h1>
       <label for="name">COMPANY / PERSONAL NAME</label>
         <input type="text" class="ppp"  name="person" placeholder="company name /personal name" value="<?php echo $personnm; ?>">
         <span class="error">*</span><?php echo $personrr; ?>
         <br><br>

          <label for="email">EMAIL</label>
              <input type="text" class="ppp" name="eml" placeholder="email here" value="<?php echo $emaill;?>" >
              <span class="error">*</span><?php echo $emailrr; ?>
              <br><br>
              
              <label for="telephone">TELEPHONE</label>
              <input type="tell" class="ppp" name="tele" placeholder="enter number" value="<?php echo $tele; ?>">
              <span class="error">*</span><?php echo $tellrr; ?>
              <br><br>

         <label for="location">LOCATION</label>
         <select name="towns" class="ppp" value="<?php echo $city; ?>">
         	<option value="select one" >select one</option>
          <option value="awoshie">awoshie</option>
             
          <option value="axim">axim</option>

          <option name="bawku">bawku</option>

          <option value="bekwa">bekwai</option>

          <option value="brekum">brekum</option>

          <option value="bibiani">bibiani</option>

          <option value="bimbilla">bimbilla</option>

          <option name="bolgatanga">bolgatanga</option>

          <option value="budumburam">buduburam</option>

          <option value="cape coast">cpae coast</option>

          <option value="dambai">dambai</option>

          <option value="damongo">dormaa ahenkro</option>

          <option value="awoshie">dunkwa-on-offin</option>

          <option value="dzodze">dzodze</option>

          <option value="effiduase">effiduase</option>

          <option value="ejura">ejura</option>

          <option value="elmina">elmina</option>

          <option value="gbawe">gbawe</option>

          <option value="goaso">goaso</option>
          <option value="ho">ho</option>
           <option value="hohoe">hohoe</option>
          <option value="kade">kade</option>
           <option value="kintampo">kintampo</option>
          <option value="koforidua">koforidua</option>
           <option value="konogo">konogo</option>
          <option value="kumasi">kumasi</option>
           <option name="lashibi">lashibi</option>
          <option value="madina">madina</option>
           <option value="mampong">mampong</option>
          <option value="mandela">mandela</option>
           <option value="mankesim">mankesim</option>
          <option value="mim">mim</option>
           <option value="nalerigu">nalerigu</option>
          <option value="new achimota">new achimota</option>
          <option value="new tafo">new tafo</option>
           
          <option value="nkawkaw">nkawkaw</option>
          <option value="nkoranza">nkoranza</option>
          <option value="nsawam">nsawam</option>
          <option value="nsuatre">nsuatre</option>
          <option value="obuasi">obuasi</option>
          <option value="oduponkpehe">oduponkpehe</option>
          <option value="prestea">prestea</option>
          <option value="sakumono">sakumono</option>
          <option value="savelugu">savelugu</option>
          <option value="sefwi-wiaso">goaso</option>
          <option value="sekondi">sekondi</option>
          <option value="suhum">suhum</option>
          <option value="sunyani">sunyani</option>
          <option value="taifa">taifa</option>
          <option value="takoradi">takoradi
          </option>
          <option value="tamale">tamale</option>
          <option value="takwa">takwa</option>
          <option value="techiman">techiman</option>
          <option value="tema">tema</option>
          <option value="wa">wa</option>
           <option value="wenchi">wenchi</option>
            <option value="winneba">winneba</option>
             <option value="yeji">goaso</option>
              <option value="yendi">yendi</option> 
          </select>
               <br><br>

        <label for="looking for">LOOKING FOR</label>
            <select name="jobthing" value="<?php echo $jobme; ?>" class="ppp">
          	<option name="select one">select one</option>
            <option value="WEB DEVELOPER">WEB DEVELOPER</option>
            <option value="MOBILE APP DEVELOPER">MOBILE APP DEVELOPER</option>
            <option value="NETWORK ENGINEER">NETWORK ENGINEER</option>
            <option value="DESKTOP DEVELOPER">DESKTOP DEVELOPER</option>
            <option value="DATABASE ADMINISTRATOR">DATABASE ADMINISTRATOR</option>
            <option value="ELECTRICAL ENGINEER">ELECTRICAL ENGINEER</option>
            <option value="GRAPHICN DESIGNER">GRAPHIC DESIGNER</option>
            <option value="VIDEO EDITOR">VIDEO EDITOR</option>
            <option value="COMPUTER HARDWARE REPAIRER">COMPUTER HARDWARE REPAIRER</option>
            <option value="OTHERS">OTHERS</option>
        </select>

            <BR><BR>

            <label for="jobtype">JOB TYPE</label>
            <select name="duration" class="ppp" value="<?php echo $jobme; ?>">
            	<option value="select one">select one</option>
             <option value="contract">CONTRACT</option>
             <option value="quick-job">QUICK-JOB</option>
             <option value="permanent-work">PERMANENT WORK</option>
            </select>
            <br><br>

            <label for="descrip">JOB DESCRIPTION</label>
            <input type="text" class="ppp" name="desc" value="<?php echo $descrip; ?>">
           <span class="error">*</span><?php echo $descriprr; ?>
            <br><br>

            <input type="submit" name="submit" id="subb33" value="send">
          </form>
        </div>

           
           <script >
               function closeme(){
               	document.getElementById("postingjob").style.display = "none";
               }

           </script> 
           
         
         </form>
         </div>
    	 </body>
    	 </html>





























