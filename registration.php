<?php

   $ffname = $llname = $emm = $ppss = $tell = $crs = $megender = $count = $skill =  "";
   $ffnamerr = $skillrr =  $llnamerr =  $emmrr =  $ppssrr =  $tellrr = $crsrr = $genderr = $countrr = "";

       if($_SERVER["REQUEST_METHOD"] == "POST"){   
   
         if(empty($_POST["ffname"])){
            $ffnamerr = "input firstname";
         }
         else {
           $ffname = $_POST["ffname"];
         }


         if(empty($_POST["llname"])){
            $llnamerr = "input lastname";
         }
          else {
             $llname = $_POST["llname"];
         }


         if(empty($_POST["emm"])){
            $emmrr = "input email";
         }
          else {
            $emm = $_POST["emm"];
         }


         if(empty($_POST["pwd"])){
            $ppssrr = "input password";
         }
          else {
            $ppss = $_POST["pwd"];
         }


         if(empty($_POST["tell"])){
            $tellrr = "input telephone";
         }
          else {
            $tell = $_POST["tell"];
         }

         if(empty($_POST["coarse"])){
            $crsrr = "tick something";
         }
          else {
            $crs = $_POST["coarse"];
         }

          if(empty($_POST["country"])){
            $countrr = "choose a country";
         }
          else {
            $count = $_POST["country"];
         }

         if(empty($_POST["gen"])){
            $genderr = "gender required";
         }
          else {
            $megender = $_POST["gen"];
         }

         if(empty($_POST["sk"])){
            $skillrr = "skilled required";
         }
          else {
            $skill = $_POST["sk"];
         }

          
          
}


   

   
        $con = mysqli_connect("localhost","root","","user_registration");
        if(!$con){
         echo "server not connected";
        }
      
        $res = mysqli_select_db($con,"user_registration");
        if(!$res){
         echo "database not found";
        }

         @$firstname = $_POST["ffname"];
          @$lastname = $_POST["llname"];
           @$email = $_POST["emm"];
            @$ppss = $_POST["pwd"];
             @$telephone = $_POST["tell"];
              @$crs = $_POST["coarse"];
               @$count = $_POST["country"];
               @$megender = $_POST["gen"];
               @$skill = $_POST["sk"];



              

         $sql = "insert into self_register (firstname,lastname,email,password,telephone,experience,gender,country,skills)
          VALUES ('$firstname','$lastname','$email','$ppss','$telephone','$crs','$megender','$count','$skill')";

         if(!mysqli_query($con,$sql)){
            echo "connection problem";
         }
      


?>


<?php 
  if(!empty($_POST["ffname"]) && !empty($_POST["llname"]) && !empty($_POST["emm"]) && !empty($_POST["pwd"]) && !empty( $_POST["gen"]) && !empty( $_POST["tell"]) && !empty($_POST["country"])) {
      header("location: come.php");
   }

?>


<!DOCTYPE html>
	<html>
	<head><title>ERROR CODE SOLVED REGISTER CREDENTIALS</title>
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
      	#registpage{
             text-align: center;
             width: 40%;
             height: 930px;
             background-color: pink;
             margin: 0 auto;
             display: block;
             padding-top: 20px;
      	}

      	.rg{
      		text-align: center;
      		width: 250px;
      		height: 30px;
      		transition: all .2s ease-in-out;
      	}

      	label {
      		font-family: comic sans ms;
      	}

      	#close2 {
      		margin-left: 95%;
      		transition: all .2s ease-in-out;
      	}
      	.sub2{
      		margin-left: 85%;
      		font-family: comic sans ms;
      		transition: all .2s ease-in-out;
      	}

      	.rg:hover,.sub2:hover,#close2:hover {
      		background-color: gold;
	        transform: scale(1.2); 
      	}

      	legend {
      		font-family: comic sans ms;
          border-bottom: 2px solid maroon;
      		} 

           
            .rg{
               display: inline-block;
            }


@media screen and (max-width: 420px){
  #registpage{
             text-align: center;
             width: 100%;
             height:100%0;
             background-color: pink;
             display: block;
            
        }
}

@media screen and (min-width: 768px){
  #registpage{
             text-align: center;
             width: 100%;
             height:100%;
             background-color: pink;
             display: block;
             line-height: 20px;
            
        }

        .rg{
          text-align: center;
          width: 40%;
          height: 60px;
          transition: all .2s ease-in-out;
        }

        #close2 {
          font-size: 20px;
          margin-left: 85%;
        
        }
        .sub2{
          font-size: 20px;
          margin-left: 80%;
          
        }

}


@media screen and (min-width: 1440px){
  #registpage {
  width: 60%;
  height: 100%;

  }
}



        
</style>
	</head>



<body>
	  <div id="registpage">
      <button onclick="consider()" id="close2">X</button>
	  	<form name="reg" action="registration.php" method="post">
         
	  		<legend>ERROR CODE SOLVED <span style="color:blue">REGISTER CREDENTIALS</span></legend><br>

    			<label for="FIRSTNAME">FIRST<span style="color:blue">NAME</span></label><br>
		<input type="text" name="ffname" class="rg" placeholder="ENTER FIRSTNAME" value="<?php echo $ffname; ?>">
      <span class="error">*<?php echo $ffnamerr; ?></span>
         <BR><BR>

    			<label for="LASTNAME">LAST<span style="color:blue">NAME</span></label><br>
		<input type="text" name="llname" class="rg" placeholder="ENTER LASTNAME" value="<?php echo $llname; ?>">
      <span class="error">*<?php echo $llnamerr; ?></span>
         <BR><BR>

         <label for="EMAIL">EM<span style="color:blue">AIL</span></label><br>
           <input type="text" name="emm" class="rg" placeholder="ENTER VALID EMAIL" value="<?php echo $emm; ?>">
      <span class="error">*<?php echo $emmrr; ?></span>
         <BR><BR>

         <label for="PASSWORD">PASS<span style="color:blue">WORD</span></label><br>
		<input type="text" name="pwd" class="rg" placeholder="ENTER PASSWORD" value="<?php echo $ppss; ?>">
      <span class="error">*<?php echo $ppssrr; ?></span>
         <BR><BR>

         <label for="telephone">TELLE<span style="color:blue">PHONE</span></label><br>
		<input type="text" name="tell" class="rg" placeholder="TELEPHONE HERE" value="<?php echo $tell; ?>">
      <span class="error">*<?php echo $tellrr; ?></span>
         <BR><BR>
           
           <label for="gender">SELECT <span style="color:blue">GENDER</span></label><BR>
         <input type="radio" name="gen" value="male">MALE<BR>
          <input type="radio" name="gen" value="female">FEMALE<BR>
           <input type="radio" name="gen" value="others">OTHERS<br>
           <span class="error">*<?php echo $genderr; ?>
            

        <p>PLEASE SELECT YOUR<span style="color:blue"> AREA OF SPECIALIZATION</span></p>
            <input type="radio" name="coarse" value="networking">NETWORKING<BR>
            <input type="radio" name="coarse" value="computer programer">COMPUTER PROGRAMING<BR>
            <input type="radio" name="coarse" value="hardware engineer">HARDWARE ENGINEER<BR>
            <input type="radio" name="coarse" value="cyber security">CYBER SECURITY<BR>
            <input type="radio" name="coarse"  value="hacker" >HACKER<BR>
            <input type="radio" name="coarse"  value="database administrator">DATABASE ADMINISTRATOR<BR>
            <span class="error">*<?php echo $crsrr; ?>
            <br><br>

           
    <label for="country">COU<span style="color:blue">NTRY</span></label>
    <select id="country" name="country">
   <option value="Afganistan">Afghanistan</option>
   <option value="Albania">Albania</option>
   <option value="Algeria">Algeria</option>
   <option value="American Samoa">American Samoa</option>
   <option value="Andorra">Andorra</option>
   <option value="Angola">Angola</option>
   <option value="Anguilla">Anguilla</option>
   <option value="Antigua & Barbuda">Antigua & Barbuda</option>
   <option value="Argentina">Argentina</option>
   <option value="Armenia">Armenia</option>
   <option value="Aruba">Aruba</option>
   <option value="Australia">Australia</option>
   <option value="Austria">Austria</option>
   <option value="Azerbaijan">Azerbaijan</option>
   <option value="Bahamas">Bahamas</option>
   <option value="Bahrain">Bahrain</option>
   <option value="Bangladesh">Bangladesh</option>
   <option value="Barbados">Barbados</option>
   <option value="Belarus">Belarus</option>
   <option value="Belgium">Belgium</option>
   <option value="Belize">Belize</option>
   <option value="Benin">Benin</option>
   <option value="Bermuda">Bermuda</option>
   <option value="Bhutan">Bhutan</option>
   <option value="Bolivia">Bolivia</option>
   <option value="Bonaire">Bonaire</option>
   <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
   <option value="Botswana">Botswana</option>
   <option value="Brazil">Brazil</option>
   <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
   <option value="Brunei">Brunei</option>
   <option value="Bulgaria">Bulgaria</option>
   <option value="Burkina Faso">Burkina Faso</option>
   <option value="Burundi">Burundi</option>
   <option value="Cambodia">Cambodia</option>
   <option value="Cameroon">Cameroon</option>
   <option value="Canada">Canada</option>
   <option value="Canary Islands">Canary Islands</option>
   <option value="Cape Verde">Cape Verde</option>
   <option value="Cayman Islands">Cayman Islands</option>
   <option value="Central African Republic">Central African Republic</option>
   <option value="Chad">Chad</option>
   <option value="Channel Islands">Channel Islands</option>
   <option value="Chile">Chile</option>
   <option value="China">China</option>
   <option value="Christmas Island">Christmas Island</option>
   <option value="Cocos Island">Cocos Island</option>
   <option value="Colombia">Colombia</option>
   <option value="Comoros">Comoros</option>
   <option value="Congo">Congo</option>
   <option value="Cook Islands">Cook Islands</option>
   <option value="Costa Rica">Costa Rica</option>
   <option value="Cote DIvoire">Cote DIvoire</option>
   <option value="Croatia">Croatia</option>
   <option value="Cuba">Cuba</option>
   <option value="Curaco">Curacao</option>
   <option value="Cyprus">Cyprus</option>
   <option value="Czech Republic">Czech Republic</option>
   <option value="Denmark">Denmark</option>
   <option value="Djibouti">Djibouti</option>
   <option value="Dominica">Dominica</option>
   <option value="Dominican Republic">Dominican Republic</option>
   <option value="East Timor">East Timor</option>
   <option value="Ecuador">Ecuador</option>
   <option value="Egypt">Egypt</option>
   <option value="El Salvador">El Salvador</option>
   <option value="Equatorial Guinea">Equatorial Guinea</option>
   <option value="Eritrea">Eritrea</option>
   <option value="Estonia">Estonia</option>
   <option value="Ethiopia">Ethiopia</option>
   <option value="Falkland Islands">Falkland Islands</option>
   <option value="Faroe Islands">Faroe Islands</option>
   <option value="Fiji">Fiji</option>
   <option value="Finland">Finland</option>
   <option value="France">France</option>
   <option value="French Guiana">French Guiana</option>
   <option value="French Polynesia">French Polynesia</option>
   <option value="French Southern Ter">French Southern Ter</option>
   <option value="Gabon">Gabon</option>
   <option value="Gambia">Gambia</option>
   <option value="Georgia">Georgia</option>
   <option value="Germany">Germany</option>
   <option value="Ghana">Ghana</option>
   <option value="Gibraltar">Gibraltar</option>
   <option value="Great Britain">Great Britain</option>
   <option value="Greece">Greece</option>
   <option value="Greenland">Greenland</option>
   <option value="Grenada">Grenada</option>
   <option value="Guadeloupe">Guadeloupe</option>
   <option value="Guam">Guam</option>
   <option value="Guatemala">Guatemala</option>
   <option value="Guinea">Guinea</option>
   <option value="Guyana">Guyana</option>
   <option value="Haiti">Haiti</option>
   <option value="Hawaii">Hawaii</option>
   <option value="Honduras">Honduras</option>
   <option value="Hong Kong">Hong Kong</option>
   <option value="Hungary">Hungary</option>
   <option value="Iceland">Iceland</option>
   <option value="Indonesia">Indonesia</option>
   <option value="India">India</option>
   <option value="Iran">Iran</option>
   <option value="Iraq">Iraq</option>
   <option value="Ireland">Ireland</option>
   <option value="Isle of Man">Isle of Man</option>
   <option value="Israel">Israel</option>
   <option value="Italy">Italy</option>
   <option value="Jamaica">Jamaica</option>
   <option value="Japan">Japan</option>
   <option value="Jordan">Jordan</option>
   <option value="Kazakhstan">Kazakhstan</option>
   <option value="Kenya">Kenya</option>
   <option value="Kiribati">Kiribati</option>
   <option value="Korea North">Korea North</option>
   <option value="Korea Sout">Korea South</option>
   <option value="Kuwait">Kuwait</option>
   <option value="Kyrgyzstan">Kyrgyzstan</option>
   <option value="Laos">Laos</option>
   <option value="Latvia">Latvia</option>
   <option value="Lebanon">Lebanon</option>
   <option value="Lesotho">Lesotho</option>
   <option value="Liberia">Liberia</option>
   <option value="Libya">Libya</option>
   <option value="Liechtenstein">Liechtenstein</option>
   <option value="Lithuania">Lithuania</option>
   <option value="Luxembourg">Luxembourg</option>
   <option value="Macau">Macau</option>
   <option value="Macedonia">Macedonia</option>
   <option value="Madagascar">Madagascar</option>
   <option value="Malaysia">Malaysia</option>
   <option value="Malawi">Malawi</option>
   <option value="Maldives">Maldives</option>
   <option value="Mali">Mali</option>
   <option value="Malta">Malta</option>
   <option value="Marshall Islands">Marshall Islands</option>
   <option value="Martinique">Martinique</option>
   <option value="Mauritania">Mauritania</option>
   <option value="Mauritius">Mauritius</option>
   <option value="Mayotte">Mayotte</option>
   <option value="Mexico">Mexico</option>
   <option value="Midway Islands">Midway Islands</option>
   <option value="Moldova">Moldova</option>
   <option value="Monaco">Monaco</option>
   <option value="Mongolia">Mongolia</option>
   <option value="Montserrat">Montserrat</option>
   <option value="Morocco">Morocco</option>
   <option value="Mozambique">Mozambique</option>
   <option value="Myanmar">Myanmar</option>
   <option value="Nambia">Nambia</option>
   <option value="Nauru">Nauru</option>
   <option value="Nepal">Nepal</option>
   <option value="Netherland Antilles">Netherland Antilles</option>
   <option value="Netherlands">Netherlands (Holland, Europe)</option>
   <option value="Nevis">Nevis</option>
   <option value="New Caledonia">New Caledonia</option>
   <option value="New Zealand">New Zealand</option>
   <option value="Nicaragua">Nicaragua</option>
   <option value="Niger">Niger</option>
   <option value="Nigeria">Nigeria</option>
   <option value="Niue">Niue</option>
   <option value="Norfolk Island">Norfolk Island</option>
   <option value="Norway">Norway</option>
   <option value="Oman">Oman</option>
   <option value="Pakistan">Pakistan</option>
   <option value="Palau Island">Palau Island</option>
   <option value="Palestine">Palestine</option>
   <option value="Panama">Panama</option>
   <option value="Papua New Guinea">Papua New Guinea</option>
   <option value="Paraguay">Paraguay</option>
   <option value="Peru">Peru</option>
   <option value="Phillipines">Philippines</option>
   <option value="Pitcairn Island">Pitcairn Island</option>
   <option value="Poland">Poland</option>
   <option value="Portugal">Portugal</option>
   <option value="Puerto Rico">Puerto Rico</option>
   <option value="Qatar">Qatar</option>
   <option value="Republic of Montenegro">Republic of Montenegro</option>
   <option value="Republic of Serbia">Republic of Serbia</option>
   <option value="Reunion">Reunion</option>
   <option value="Romania">Romania</option>
   <option value="Russia">Russia</option>
   <option value="Rwanda">Rwanda</option>
   <option value="St Barthelemy">St Barthelemy</option>
   <option value="St Eustatius">St Eustatius</option>
   <option value="St Helena">St Helena</option>
   <option value="St Kitts-Nevis">St Kitts-Nevis</option>
   <option value="St Lucia">St Lucia</option>
   <option value="St Maarten">St Maarten</option>
   <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
   <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
   <option value="Saipan">Saipan</option>
   <option value="Samoa">Samoa</option>
   <option value="Samoa American">Samoa American</option>
   <option value="San Marino">San Marino</option>
   <option value="Sao Tome & Principe">Sao Tome & Principe</option>
   <option value="Saudi Arabia">Saudi Arabia</option>
   <option value="Senegal">Senegal</option>
   <option value="Seychelles">Seychelles</option>
   <option value="Sierra Leone">Sierra Leone</option>
   <option value="Singapore">Singapore</option>
   <option value="Slovakia">Slovakia</option>
   <option value="Slovenia">Slovenia</option>
   <option value="Solomon Islands">Solomon Islands</option>
   <option value="Somalia">Somalia</option>
   <option value="South Africa">South Africa</option>
   <option value="Spain">Spain</option>
   <option value="Sri Lanka">Sri Lanka</option>
   <option value="Sudan">Sudan</option>
   <option value="Suriname">Suriname</option>
   <option value="Swaziland">Swaziland</option>
   <option value="Sweden">Sweden</option>
   <option value="Switzerland">Switzerland</option>
   <option value="Syria">Syria</option>
   <option value="Tahiti">Tahiti</option>
   <option value="Taiwan">Taiwan</option>
   <option value="Tajikistan">Tajikistan</option>
   <option value="Tanzania">Tanzania</option>
   <option value="Thailand">Thailand</option>
   <option value="Togo">Togo</option>
   <option value="Tokelau">Tokelau</option>
   <option value="Tonga">Tonga</option>
   <option value="Trinidad & Tobago">Trinidad & Tobago</option>
   <option value="Tunisia">Tunisia</option>
   <option value="Turkey">Turkey</option>
   <option value="Turkmenistan">Turkmenistan</option>
   <option value="Turks & Caicos Is">Turks & Caicos Is</option>
   <option value="Tuvalu">Tuvalu</option>
   <option value="Uganda">Uganda</option>
   <option value="United Kingdom">United Kingdom</option>
   <option value="Ukraine">Ukraine</option>
   <option value="United Arab Erimates">United Arab Emirates</option>
   <option value="United States of America">United States of America</option>
   <option value="Uraguay">Uruguay</option>
   <option value="Uzbekistan">Uzbekistan</option>
   <option value="Vanuatu">Vanuatu</option>
   <option value="Vatican City State">Vatican City State</option>
   <option value="Venezuela">Venezuela</option>
   <option value="Vietnam">Vietnam</option>
   <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
   <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
   <option value="Wake Island">Wake Island</option>
   <option value="Wallis & Futana Is">Wallis & Futana Is</option>
   <option value="Yemen">Yemen</option>
   <option value="Zaire">Zaire</option>
   <option value="Zambia">Zambia</option>
   <option value="Zimbabwe">Zimbabwe</option>  
</select>
<span class="error"> *<?php echo $countrr; ?></span>



   <p>INDIVIDUAL SKILLED<span style="color:blue">ATTAIANED</span></p>
   <input type="checkbox" name="sk" value="networking">NETWORKING<br>
   <input type="checkbox" name="sk" value="hardware engineer">HARDWARE ENGINEER<BR>
  <input type="checkbox" name="sk" value="cyber security">CYBER SECURITY<BR>
  <input type="checkbox" name="sk" value="hacker">HACKER<BR>
  <input type="checkbox" name="sk" value="database admin">DATABASE ADMINISTRATOR<br>
  <input type="checkbox" name="sk" value="computer programing">COMPUTER PROGRAMING<BR> 
  <span class="error">*<?php echo $skillrr; ?></span> 
  <button type="submit" class="sub2" name="submit" value="submit">submit</button> 
</form>
</div>
     
     <script>
     	function consider(){
     		document.getElementById("registpage").style.display = "none";
     	}


     </script>

        </body> 
        </html>   


