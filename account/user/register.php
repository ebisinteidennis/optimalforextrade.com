<?php
session_start();
include("../../config/config.php");
include("../../config/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['fname'];
    $email = $_POST['email']; 
    $country = $_POST['country'];
    $plan = $_POST['plan'];
    $currency = $_POST['currency'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    

    if (!empty($email) && !empty($password)) {
        // Save to the database
        $id = random_num(10);
        $query = "INSERT INTO users (id,fname, lname, email, country, phone, password, cpassword) VALUES ('$id', '$fname','$lname', '$email', '$country', '$phone', '$password', '$cpassword')";

        // Perform the query and handle errors
        if (mysqli_query($link, $query)) {
            // Redirect upon successful insertion
            header("Location: login.php");
            exit();
        } else {
            // Display error message if query fails
            echo "Error: " . mysqli_error($link);
        }
    } else {
        echo "Please enter valid information!";
    }
}
?>



<!DOCTYPE html>
<html lang="en" class="">

<head>
  <meta charset="utf-8" />

   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
   <link rel="shortcut icon" href="images/favicon1.png" />
  


    <!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title> Optimalforextrade.com | Forex pairs & CFDs on Shares, Indices, Energies, Metals & ETFs* </title>
  <meta name="description" content="Start trading on your terms" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/h tml5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
<link href="box.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon1.png" />
 <meta name="viewport" content="width=device-width, initial-sacale=1.0">


 <!--  we addeded files from here -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  

 
 
<script src="//code.tidio.co/se0mwpqarlqproit75tqkmu0o7jltosu.js" async></script>

 
 

<!--<style>

    
*{

 margin:0px;
 padding: 0px;
}
body, html {
  width: 100%;
  height: 100%;
}


@media screen and (max-width:  768px){
 .body {
  width: 100%;
 }
} 

</style>   -->








<script type="text/javascript" language="JavaScript">
function showorhide(id){
   if(document.getElementById(id)){    //check the element exists and can be accessed
       var ele = document.getElementById(id);    //get hold of the element
       if(ele.style.display=="none"){   //see if display property is set to none
           ele.style.display="block";       
       }else{
           ele.style.display="none";     
       }
   }
} 
 
</script>
</head>






<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #000;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 25px 8px 8px 32px;
  text-decoration: none;
  font-size: 17px;
  color: #edecec;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #61ce70;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 17px;
  margin-left: 50px;
}

.openbtn {
  font-size: 17px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 10px;
  border: none;
}

.openbtn:hover {
  background-color: #444;
}




  .navbar{
    /*  position: fixed;
  top: 0px;
  */
   width:100%;
    
    background-color: #000;
    overflow: hidden;
     height: 63px;
   

  }

  .navbar a{
        float:left;
        display: block;
        color: #fff;
        text-align: center;
        padding: 10px 10px;
        text-decoration: none;
        font-size: 17px;
        margin: 25 0 50 0;
        margin-left: -10px;

  }
  .navbar a img{
padding: 0px 10px;
margin: 100 0 100 0;
  }



  .navbar ul{
    margin: 20 0 0 0;
    list-style: none;
    height: 63px;
  


  }

  .navbar a:hover{
    
    color: #000;
  }
  


#main {

  transition: margin-left 0.5s;
  padding: 0px;
   overflow: hidden;
   
  width:100%;

    
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}



.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;



</style>



<!--
<style>
/* Header Top Background Color             #header-top*/
#body {
    background-color: #ff0000;
}


</style>-->
<body>
   



<style>


.dropbtn:hover, .dropbtn:focus {
  background-color: #0000;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: #61ce70;
  padding: 5px;
  text-decoration: none;
  display: block;
}


.show {display: block;}
</style>


              
      


</div>

<div id="main">
<!--  <button class="openbtn" onclick="openNav()">☰</button> --> 
  <nav class="navbar">

  <span class="open-slide">

   

      <a href="../../index.html"> <img src="../img/logo2.png" width="190"></a>


  </span>

  <ul class="navbar-nav">
  <!-- <li><a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> </li>  -->
  
  
   <li>      

</li>
  

  </ul>

</nav>


<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
   
</body>

<!-- Mirrored from globalbitasset.com/account/user/register by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 03:11:11 GMT -->
</html>








  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->


   <style>
   .form{
    background-color:#0a1119f;
   }
   
span{
   background-color:#fff;
}
   
div {
 padding-left: 30px;  
 padding-right: 30px;
 background-color:#0a1119;
 border-color: #000;

}
</style>



</head>
<body style="background-color:#000;">
    
    
<!--  captcha java s  -->
<script src="../../../www.google.com/recaptcha/api.js" async defer></script>

  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <section style="background-color:#000; color:#fff" >
       <header class="panel-heading text-center">
          <img src="../img/logo2.png" width="300">
          <h4 style='color:#fff'>Create  Account</h4>
        </header>   <!-- panel-body wrapper-lg  -->
 <form action="#" method="post" class=""></form>







<section>

                     



                                    <form method="post" action="#"  >
                                        <span class="row">
   <p class="form-group col-md-6 ">
                                                <label style="padding-left: 20: ">Full Name:</label>
                                                <input type="text" name="fname" class="form-control input-md" value="" placeholder="" />
                                            </p>


                                            <p class="form-group col-md-6 "  >
                                                <label>Username:</label>

<input name='username'  type='text' value="" class="form-control input-md" placeholder="Username" required/>

                                                                                            </p>

  <p class="form-group col-md-6">
                                                <label>Email Address:</label>
                                                <input type="email" name="email" class="form-control input-md" value="" placeholder="" required/>
                                            </p>

<!--
                                         
<p class="form-group col-md-6">
                                                <label>Address :</label>
                                                <input type="text" name="address" class="form-control input-md" value="" placeholder="Resident Address"/>
                                            </p>

<p class="form-group col-md-6">
                                                <label>City :</label>
                                                <input type="text" name="city" class="form-control input-md" value="" placeholder="City"/>
                                            </p>

-->

<p class="form-group col-md-6">
                                                <label>Country:</label>
                                                <select name='country' class="form-control input-md" placeholder="Country" required><option value='' selected='selected'></option><option value='Afghanistan' >Afghanistan</option><option value='Albania' >Albania</option><option value='Algeria' >Algeria</option><option value='American Samoa' >American Samoa</option><option value='Andorra' >Andorra</option><option value='Angola' >Angola</option><option value='Antigua and Barbuda' >Antigua and Barbuda</option><option value='Argentina' >Argentina</option><option value='Armenia' >Armenia</option><option value='Australia' >Australia</option><option value='Austria' >Austria</option><option value='Azerbaijan' >Azerbaijan</option><option value='Bahamas' >Bahamas</option><option value='Bahrain' >Bahrain</option><option value='Bangladesh' >Bangladesh</option><option value='Barbados' >Barbados</option><option value='Belarus' >Belarus</option><option value='Belgium' >Belgium</option><option value='Belize' >Belize</option><option value='Benin' >Benin</option><option value='Bermuda' >Bermuda</option><option value='Bhutan' >Bhutan</option><option value='Bolivia' >Bolivia</option><option value='Bosnia and Herzegovina' >Bosnia and Herzegovina</option><option value='Botswana' >Botswana</option><option value='Brazil' >Brazil</option><option value='Brunei' >Brunei</option><option value='Bulgaria' >Bulgaria</option><option value='Burkina Faso' >Burkina Faso</option><option value='Burundi' >Burundi</option><option value='Cambodia' >Cambodia</option><option value='Cameroon' >Cameroon</option><option value='Canada' >Canada</option><option value='Cape Verde' >Cape Verde</option><option value='Cayman Islands' >Cayman Islands</option><option value='Central African Republic' >Central African Republic</option><option value='Chad' >Chad</option><option value='Chile' >Chile</option><option value='China' >China</option><option value='Colombia' >Colombia</option><option value='Comoros' >Comoros</option><option value='Congo, Democratic Republic of the' >Congo, Democratic Republic of the</option><option value='Congo, Republic of the' >Congo, Republic of the</option><option value='Costa Rica' >Costa Rica</option><option value='C�te d&#039;Ivoire' >C�te d&#039;Ivoire</option><option value='Croatia' >Croatia</option><option value='Cuba' >Cuba</option><option value='Cura�ao' >Cura�ao</option><option value='Cyprus' >Cyprus</option><option value='Czech Republic' >Czech Republic</option><option value='Denmark' >Denmark</option><option value='Djibouti' >Djibouti</option><option value='Dominica' >Dominica</option><option value='Dominican Republic' >Dominican Republic</option><option value='East Timor' >East Timor</option><option value='Ecuador' >Ecuador</option><option value='Egypt' >Egypt</option><option value='El Salvador' >El Salvador</option><option value='Equatorial Guinea' >Equatorial Guinea</option><option value='Eritrea' >Eritrea</option><option value='Estonia' >Estonia</option><option value='Ethiopia' >Ethiopia</option><option value='Faroe Islands' >Faroe Islands</option><option value='Fiji' >Fiji</option><option value='Finland' >Finland</option><option value='France' >France</option><option value='French Polynesia' >French Polynesia</option><option value='Gabon' >Gabon</option><option value='Gambia' >Gambia</option><option value='Georgia' >Georgia</option><option value='Germany' >Germany</option><option value='Ghana' >Ghana</option><option value='Greece' >Greece</option><option value='Greenland' >Greenland</option><option value='Grenada' >Grenada</option><option value='Guam' >Guam</option><option value='Guatemala' >Guatemala</option><option value='Guinea' >Guinea</option><option value='Guinea-Bissau' >Guinea-Bissau</option><option value='Guyana' >Guyana</option><option value='Haiti' >Haiti</option><option value='Honduras' >Honduras</option><option value='Hong Kong' >Hong Kong</option><option value='Hungary' >Hungary</option><option value='Iceland' >Iceland</option><option value='India' >India</option><option value='Indonesia' >Indonesia</option><option value='Iran' >Iran</option><option value='Iraq' >Iraq</option><option value='Ireland' >Ireland</option><option value='Israel' >Israel</option><option value='Italy' >Italy</option><option value='Jamaica' >Jamaica</option><option value='Japan' >Japan</option><option value='Jordan' >Jordan</option><option value='Kazakhstan' >Kazakhstan</option><option value='Kenya' >Kenya</option><option value='Kiribati' >Kiribati</option><option value='North Korea' >North Korea</option><option value='South Korea' >South Korea</option><option value='Kosovo' >Kosovo</option><option value='Kuwait' >Kuwait</option><option value='Kyrgyzstan' >Kyrgyzstan</option><option value='Laos' >Laos</option><option value='Latvia' >Latvia</option><option value='Lebanon' >Lebanon</option><option value='Lesotho' >Lesotho</option><option value='Liberia' >Liberia</option><option value='Libya' >Libya</option><option value='Liechtenstein' >Liechtenstein</option><option value='Lithuania' >Lithuania</option><option value='Luxembourg' >Luxembourg</option><option value='Macedonia' >Macedonia</option><option value='Madagascar' >Madagascar</option><option value='Malawi' >Malawi</option><option value='Malaysia' >Malaysia</option><option value='Maldives' >Maldives</option><option value='Mali' >Mali</option><option value='Malta' >Malta</option><option value='Marshall Islands' >Marshall Islands</option><option value='Mauritania' >Mauritania</option><option value='Mauritius' >Mauritius</option><option value='Mexico' >Mexico</option><option value='Micronesia' >Micronesia</option><option value='Moldova' >Moldova</option><option value='Monaco' >Monaco</option><option value='Mongolia' >Mongolia</option><option value='Montenegro' >Montenegro</option><option value='Morocco' >Morocco</option><option value='Mozambique' >Mozambique</option><option value='Myanmar' >Myanmar</option><option value='Namibia' >Namibia</option><option value='Nauru' >Nauru</option><option value='Nepal' >Nepal</option><option value='Netherlands' >Netherlands</option><option value='New Zealand' >New Zealand</option><option value='Nicaragua' >Nicaragua</option><option value='Niger' >Niger</option><option value='Nigeria' >Nigeria</option><option value='Northern Mariana Islands' >Northern Mariana Islands</option><option value='Norway' >Norway</option><option value='Oman' >Oman</option><option value='Pakistan' >Pakistan</option><option value='Palau' >Palau</option><option value='Palestine, State of' >Palestine, State of</option><option value='Panama' >Panama</option><option value='Papua New Guinea' >Papua New Guinea</option><option value='Paraguay' >Paraguay</option><option value='Peru' >Peru</option><option value='Philippines' >Philippines</option><option value='Poland' >Poland</option><option value='Portugal' >Portugal</option><option value='Puerto Rico' >Puerto Rico</option><option value='Qatar' >Qatar</option><option value='Romania' >Romania</option><option value='Russia' >Russia</option><option value='Rwanda' >Rwanda</option><option value='Saint Kitts and Nevis' >Saint Kitts and Nevis</option><option value='Saint Lucia' >Saint Lucia</option><option value='Saint Vincent and the Grenadines' >Saint Vincent and the Grenadines</option><option value='Samoa' >Samoa</option><option value='San Marino' >San Marino</option><option value='Sao Tome and Principe' >Sao Tome and Principe</option><option value='Saudi Arabia' >Saudi Arabia</option><option value='Senegal' >Senegal</option><option value='Serbia' >Serbia</option><option value='Seychelles' >Seychelles</option><option value='Sierra Leone' >Sierra Leone</option><option value='Singapore' >Singapore</option><option value='Sint Maarten' >Sint Maarten</option><option value='Slovakia' >Slovakia</option><option value='Slovenia' >Slovenia</option><option value='Solomon Islands' >Solomon Islands</option><option value='Somalia' >Somalia</option><option value='South Africa' >South Africa</option><option value='Spain' >Spain</option><option value='Sri Lanka' >Sri Lanka</option><option value='Sudan' >Sudan</option><option value='Sudan, South' >Sudan, South</option><option value='Suriname' >Suriname</option><option value='Swaziland' >Swaziland</option><option value='Sweden' >Sweden</option><option value='Switzerland' >Switzerland</option><option value='Syria' >Syria</option><option value='Taiwan' >Taiwan</option><option value='Tajikistan' >Tajikistan</option><option value='Tanzania' >Tanzania</option><option value='Thailand' >Thailand</option><option value='Togo' >Togo</option><option value='Tonga' >Tonga</option><option value='Trinidad and Tobago' >Trinidad and Tobago</option><option value='Tunisia' >Tunisia</option><option value='Turkey' >Turkey</option><option value='Turkmenistan' >Turkmenistan</option><option value='Tuvalu' >Tuvalu</option><option value='Uganda' >Uganda</option><option value='Ukraine' >Ukraine</option><option value='United Arab Emirates' >United Arab Emirates</option><option value='United Kingdom' >United Kingdom</option><option value='United States' >United States</option><option value='Uruguay' >Uruguay</option><option value='Uzbekistan' >Uzbekistan</option><option value='Vanuatu' >Vanuatu</option><option value='Vatican City' >Vatican City</option><option value='Venezuela' >Venezuela</option><option value='Vietnam' >Vietnam</option><option value='Virgin Islands, British' >Virgin Islands, British</option><option value='Virgin Islands, U.S.' >Virgin Islands, U.S.</option><option value='Yemen' >Yemen</option><option value='Zambia' >Zambia</option><option value='Zimbabwe' >Zimbabwe</option></select>

                                            </p>



<p class="form-group col-md-6">
                                                <label>Select Plan:</label>
                                                <select name='plan' class="form-control input-md" placeholder="Plan"  required><option value='' selected='selected'></option><option value='Starter' >Starter</option><option value='Basic' >Basic</option>
                                                <option value='Pro' >Pro</option>
                                              <option value='Executive' >Executive</option>
                                          </select>

                                            </p>
                                            
                         <p class="form-group col-md-6">



                                                <label>Select Currency:</label>
                                                <select name='currency' class="form-control input-md" placeholder="Currency"  required><option value='' selected='selected'></option>
                                                <option value='€' >European Euro(€)</option>
                                              <option value='$' >US Dollar($)</option>
                                               
                                          </select>

                                            </p>
                                            

<p class="form-group col-md-6">
                                                <label>Gender:</label>
                                                <select name='gender' class="form-control input-md" placeholder="Gender" required><option value='' selected='selected'></option><option value='Male' >Male</option><option value='Female' >Female</option></select>

                                            </p>


                                            <p class="form-group col-md-6">
                                                <label>Phone Number:</label>
                                                <input type="text" name="phone" class="form-control input-md" value="" placeholder="" required/>
                                            </p>




                                          



<p class="form-group col-md-6">
                                                <label>Password :</label>
                                                <input type="password" name="password" class="form-control input-md" value="" placeholder="" required/>
                                            </p>

<p class="form-group col-md-6">
                                                <label>Confirm Password:</label>
                                                <input type="password" name="cpassword" class="form-control input-md" value="" placeholder="" required/>
                                            </p>  
<!--

<div class="form-group col-md-6">
                                                <label>Secret Key:</label>
                                                <input type="password" name="secret_pin" class="form-control input-md" value="" />
                                            </div>
-->
<p class="form-group col-md-12"><input type="checkbox" name="box" value="check" required/> I accept the Terms and Conditons
</p>




</select>

                                    </span>


<div class="g-recaptcha" data-theme="light" data-sitekey="6LezfqEeAAAAAHAZ89ED0n9FLHt3da0ZRQUJSjIS" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
<br>
        
        
                                          <p class="form-group">

<input type='submit'  style="background-color: #005bcc" name='btc_register' class='btn btn-warning btn-block' value='Register' />


<p class="text-muted text-center"><small>Already have an Account?  <a href="login.php"  style="color: #fff">Login</a></small></p>

        
        </form>




                                            </p>
                                            <hr>
                                        </div>
                                        </div>
                                        </div>
                                        </div>

                                      </div>
                                      </div>
                                    </form>

                                    
</section>


  <!-- footer -->
 <!-- <footer id="footer">
    <div class="text-center padder">
     
    </div>
  </footer>  -->
  <!-- / footer -->
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
<script src="//code.tidio.co/se0mwpqarlqproit75tqkmu0o7jltosu.js" async></script>

</body>
</html>