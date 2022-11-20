<?php

 $company = $service = $location = $email = $telephone = $serv = "";
 $companyrr = $servicerr = $locationrr = $emailrr = $telephonerr = $servrr = "";


  if($_SERVER["REQUEST_METHOD"] == "POST"){

     if(empty($_POST["comename"])){
      $companyrr = "name required";      
     }
     else {
      $company = $_POST["comename"];
     }


     if(empty($_POST["servicename"])){
      $servicerr = "service required";      
     }
     else {
      $service = $_POST["servicename"];
     }


     if(empty($_POST["towns"])){
      $locationrr = "location required";      
     }
     else {
      $location = $_POST["towns"];
     }


     if(empty($_POST["emaill"])){
      $emailrr = "emaill required";      
     }
     else {
      $company = $_POST["emaill"];
     }


     if(empty($_POST["perstell"])){
      $telephonerr = "input telephone";      
     }
     else {
      $telephone = $_POST["perstell"];
     }


     if(empty($_POST["service_tp"])){
      $servrr = "service type";      
     }
     else {
    $serv = $_POST["service_tp"];
     }





$con = mysqli_connect("localhost","root","","order_form");
  if(!$con){
    echo "connection not established";
  }

  $sel = mysqli_select_db($con,"order_form");
  if(!$sel){
    echo "database not established";
  }


    @$company = $_POST["comename"];
     @$service = $_POST["servicename"];
     @$location = $_POST["towns"];
     @$email = $_POST["emaill"];
     @$telephone = $_POST["perstell"];
     @$serv = $_POST["service_tp"];
      

  $sql = "insert into accept_form(company_name,service_name,company_location,email,telephone,service_type
  ) VALUES('$company','$service','$location','$email','$telephone','$serv')";

       if(!mysqli_query($con,$sql)){
        echo "connection not available";
       }


         }


?>


<?php 

  if(!empty($_POST["comename"]) && !empty($_POST["servicename"]) && !empty($_POST["towns"]) && !empty($_POST["emaill"]) && !empty( $_POST["perstell"]) && !empty($_POST["service_tp"])) {
      header("location: come.php");
   }

?>


	<html>
	<head><title>ORDER YOUR SERVICE</title>

      <style>

        #allorder{
          width: 100%;
          overflow: hidden;
          line-height: 30px;
          margin-top: 30px;
        }

        #servme {
          width: 250px;
          height: 30px;
        }

        .ordersv {
          border-top: 2px solid blue;
          width: 60%;
          height: auto;
           display: inline-block;
            text-shadow: 3px 3px 3px white;
            line-height: 30px;
            word-spacing: 15px;
            text-transform: capitalize;  

        }

        #svvnet {background-color:  #cyan; bottom-top: 30px; }
        #svvnet1 {background-color: #gold; bottom-top: 30px;}
        #svvnet2 {background-color: #cyan; bottom-top: 30px;}
        #svvnet3 {background-color: #cyan; bottom-top: 30px;}
        #svvnet4 {background-color: #cyan; }
        #svvnet5 {background-color: #cyan; }
        #svvnet6 {background-color: #cyan; }
        #svvnet7 {background-color: #cyan; }
        #svvnet8 {background-color: #cyan; }  


#img2 {
  width: 30%;
  min-height: 70%;
}


.fillout {
  margin-bottom: 20px;
  font-size: 15px;
  font-weight: bold;
  text-shadow: 3px 3px 3px blue;
  transition: all .2s ease-in-out;
  color: white;
  
  
}

.fillout:hover {
  background-color: gray;
  transform: scale(1.2);
}
   h1 {
    position: relative;
    top: 40px;
    left: 33%;
    color: gray;
    text-shadow: 2px 2px 2px blue;
    font-weight: bold;

}

#formform {
    display: none;
    position: fixed;
    top: 15%;
    margin-left: 25%;
    width: 40%;
    height: 65%;
    text-align: center;
    background-color: #3CB371;
    padding: 40px;
    line-height: 40px;
    border: 1px solid blue;
    opacity: 0.9;
   }


   label {
    display: block;
    color: white;
    font-weight: bold;
    text-shadow: 3px 3px 3px blue;
    font-size: 20px;
   }

.inputv{
    width: 350px;
    height: 40px;
    text-align: center;
   }


   #sub22{
    position: relative;
    bottom: 80px;
    left: 45%;
    font-size: 20px;
    font-weight: bold;
    text-shadow: 3px 3px 3px blue;
    color: white;
    transition: all .2s ease-in-out;
   }


   #cls33{
    position: relative;
    left: 50%;
    transition: all .2s ease-in-out;
   }


  #cls33:hover {
    background-color: gold;
    transform: scale(1.2);
  }

  #sub22:hover {
   background-color: #3CB371;
   transform: scale(1.2);
  }




 @media screen and (max-width: 640px) {

  h1 {
    position: relative;
    left: 0px;
  }


#allorder {
  width: 100%;
  
}

#img2 {
  width: 100%;
  margin: 0px;
  padding: 0px;
}

        #svvnet {background-color:  #cyan; margin-bottom: 80px;}
        #svvnet1 {background-color: #gold; margin-bottom: 80px;}
        #svvnet2 {background-color: #cyan; margin-bottom: 80px; text-transform: capitalize;}
        #svvnet3 {background-color: #cyan; margin-bottom: 80px;}
        #svvnet4 {background-color: #cyan; margin-bottom: 80px;}
        #svvnet5 {background-color: #cyan; margin-bottom: 80px;}
        #svvnet6 {background-color: #cyan; margin-bottom: 80px;}
        #svvnet7 {background-color: #cyan; margin-bottom: 80px;}
        #svvnet8 {background-color: #cyan; }  

   .ordersv {
     height: 50px;
     font-size: 10px;
     display: initial;
   }

   #formform {
    position: fixed;
    top: 10%;
   width: 100%;
   height: auto;
   margin: 0px;
   padding: 0px;
   }


label {
  display: block;
  color: white;
  font-size: 15px;
  text-shadow: 2px 2px 2px blue;
}


.inputv{
  width: 250px;
  height: 30px;
  text-align: center;
}

#sub22 {
  position: relative;
  bottom: 10px;
  left: 37%;
  font-size: 20px;
  transition: all .2s ease-in-out;
}

 #cls33{
    position: relative;
    left: 40%;
    transition: all .2s ease-in-out;
   }

  }

   @media screen and (max-width: 340px)  {

#formform {
   position: fixed;
   line-height: 30px;
   top: 0px;
   width: 100%;
   margin: 0px;
   padding: 0px;
   height: 100vh%;
   }

   #sub22 {
  position: relative;
  bottom: 15px;
  left: 37%;
  font-size: 15px;
  transition: all .2s ease-in-out;
}


}

@media screen and (min-width:768px) and (max-width:1024px){
  h1{
    position: relative;
    left: 0px;
  }
}

      </style>
	</head>

	<body>
<div id="allorder">

     <div id="svvnet">
     	<h1>ERROR CODE SOLVED NETWORK TEAM</h1>
     	<img src="thepic.jpg"  id="img2">
     	<h3 class="ordersv">ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!
     	</h3> 
       <button onclick="orserv()" class="fillout">APPLY</button>
       </div>
    


     	 <div id="svvnet1">
     	 	<h1>ERROR CODE WEB DEVELOPER'S TEAM</h1>
     	 	  <img src="thepic.jpg"  id="img2">
     	<h3 class="ordersv">  ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	  <button onclick="orserv()" class="fillout">APPLY</button>
       </div>


     	 <div id="svvnet2">
     	 	<h1 id="hone">ERROR CODE SOLVED MOBILE APPS TEAM</h1>
     	    <img src="thepic.jpg"  id="img2">
     	<h3 class="ordersv"> ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	  <button onclick="orserv()" class="fillout">APPLY</button>
      </div>


     	 <div id="svvnet3">
     	 	<h1>ERROR CODE SOLVED DESKTOP APPS TEAM</h1>
     	      <img src="thepic.jpg"  id="img2">
     	<h3 class="ordersv"> ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	<button onclick="orserv()" class="fillout">APPLY</button>
       </div>


     	 <div id="svvnet4">
     	 	<h1>ERROR CODE SOLVED ICT MENTAINANCE  TEAM</h1>
     	    <img src="thepic.jpg"  id="img2">
     	<h3 class="ordersv"> ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	<button onclick="orserv()" class="fillout">APPLY</button>
       </div>


     	 <div id="svvnet5">
     	 	<h1>ERROR CODE SOLVED HARDWARE TECHNICIAN  TEAM</h1>
     	    <img src="thepic.jpg"  id="img2">
     <h3 class="ordersv"> ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	<button onclick="orserv()" class="fillout">APPLY</button>
        </div>


     	 <div id="svvnet6">
     	 	<h1>ERROR CODE SOLVED DATABASE ADMINISTRATOR TEAM</h1>
     	 	  <img src="thepic.jpg"  id="img2">
     	<h3 class="ordersv"> ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	<button onclick="orserv()" class="fillout">APPLY</button>
        </div>


     	 <div id="svvnet7">
     	 	<h1>ERROR CODE SOLVED OTHER FIELDS</h1>
     	 	<img src="desktop.jpeg"  id="img2">
     	<h3 class="ordersv"> ERROR CODE SOLVED IS A TECH ORGANISATION THAT DELIVER IT SERVICES<BR>
     		TO COMPANIES AND INDIVIDUALS....WE OFFER SPECIALISE IT SOLUTIONS IN ALL<BR>
     	    FIELD OF IT TECHNOLOGY...OUR NETWORK TEAM IS A GROUP OF SPECIALISE STUDENT<BR>
     	    OR INDIVIDUALS THAT HAS MORE THAN FIVE YEARS EXPERIENCE...FOR A QUALITY<BR>
     	    WORK TO BE DONE, WE WISH YOU CALL OUR NETWORK TEAM FOR ASSISTANCE.<BR>
     	    THANK YOU!!!</h3>
     	    <button onclick="orserv()" class="fillout">APPLY</button>
       </div>


        <div id="svvnet8">
        <h1>ERROR CODE ELECTRICAL TEAM</h1>
        <img src="desktop.jpeg"  id="img2">
      <h3 class="ordersv"> ERROR CODE ELECTRICAL TEAM IS A SOLE 
        COMPANY MANAGED BY AN EXPERT ELECTRICAL ENGINEER WHO HAS 
        15 YEARS EXPERIENCE AND ABOVE IN ELECTRICAL AND ELECTRONICS
        ENGINEER.WE ALSO DESIGN,BUILD AND MAINTENANCE OF ELECTRICAL
        CONTROL SYSTEM,MACHINERY AND EQUIPMENT..OUR TEAM DELIVER SERVICES
        IN TRANSPORT METWORKS,LIGHTING,HEATING,VENTILATION,LIFT SYSTEMS,
        POWER GENERATION AND DISTRIBUTION,RENEWABLE ENERGY,MANUFACTURING 
        AND CONSTRUCTION</h3>
          <button onclick="orserv()" class="fillout">APPLY</button>
       </div>

       </div>

     




 <div id="formform">
        <button onclick="close44()" id="cls33">X</button>
        <form action="orderserv.php" method="POST">
         		<label for="name">PESONNEL NAME /COMPANY NAME</label>
         		<input type="text" name="comename" id="nm1" class="inputv" placeholder="MR JAMES /TEMA OIL REFINERY LIMITED" value="<?php echo $company; ?>">
            <span class="error">*<?php echo $companyrr; ?></span>
         		<BR>

         		<label for="SERViCES">SERVICE NAME</label>
         		<select id="servme" name="servicename">
              <option value="networking">NETWORKING</option>
              <option value="web development">WEB DEVELOPMENT</option>
              <option value="web design">WEB DESIGN</option>
              <option value="mobile apps">MOBILE APPS</option>
              <option value="desktop apps">DESKTOP APPS</option>
              <option value="electricals">ELECTRICALS ENGINEERING</option>
              <option value="database management">DATABASE MANAGEMENT</option>
              <option value="computer repaires">DESKTOP & LAPTOP REPAIRES</option>
              <option value="printer repaires">PRINTER REPAIRES</option>
              <option value="cctv installation">CCTV INSTALLATION</option>
              <option value="others">OTHERS</option>              
            </select>
            <span class="error">*<?php echo $servicerr; ?></span>
         		<BR>


         		<label for="LOCATION">COMPANY LOCATION / PERSON'S LOCATION</label>
         		<select name="towns" class="ppp">
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
          <span class="error">*<?php echo $locationrr; ?></span>
           
         		<BR>

            <label for="EMAIL">PERSONELL EMAIL ADDRESS</label>
            <input type="text" name="emaill" id="emll" class="inputv" placeholder="EMAIL REQUIRED HERE" value="<?php echo $email; ?>">
            <span class="error">*<?php echo $emailrr; ?></span>
            <BR>

         		<label for="TELEPHONE">PESONNEL TELEPHONE /COMPANY TELEPHONE</label>
         		<input type="tell" name="perstell" id="servtell" class="inputv" placeholder="0265763004 / 0304657839" value="<?php echo $telephone; ?>">
            <span class="error">*<?php echo $telephonerr; ?></span>
         		<BR> <BR>

         	  <select id="serv" name="service_tp">
              <option value="CONTRACT">CONTRACT</option>
              <option value="QUICK-JOB">QUICK-JOB</option>
              <option value="EMPLOYE">EMPLOYE</option>
              </select>
              <span class="error">*<?php echo $servrr; ?></span>
            <br>
                <button type="submit" id="sub22">SUBMIT</button>
              </form>
              
         </div>

       


     <script>
     	function orserv(){
     		document.getElementById("formform").style.display ="block";
     	}

      function close44(){
            document.getElementById("formform").style.display ="none";
          }
       
     </script>



	</body>
	</html>