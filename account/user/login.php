<?php
session_start();
include("../../config/config.php");
include("../../config/functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!empty($email) && !empty($password)) {
        // read from the database
        $query = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
        $result = mysqli_query($link, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user_data = mysqli_fetch_assoc($result);
            if ($user_data['password'] === $password) {
                $_SESSION['id'] = $user_data['id'];
                header("Location: ../../backend/index.php");
                exit(); // Use exit() after header redirect
            }
        }
    } else {
        echo "Please enter valid information!";
    }
}
?>

<!DOCTYPE html>
<html lang="en" class="">

<!-- Mirrored from globalbitasset.com/account/user/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 03:11:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="utf-8" />
  <title>Login | Optimalforextrade</title>
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
   <link rel="shortcut icon" href="images/favicon1.png" />


    <!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title> Optimalforextrade | Forex pairs & CFDs on Shares, Indices, Energies, Metals & ETFs* </title>
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

   

      <a href="../../index.php"> <img src="../img/logo2.png" width="190"></a>


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

<!-- Mirrored from globalbitasset.com/account/user/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 03:11:16 GMT -->
</html>









 <style>
   .form{
    background-color:#fff;
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


<!--  captcha java s  -->
<script src="../../../www.google.com/recaptcha/api.js" async defer></script>
  
  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
     
      <section style="background-color:#000; color:#fff" >
        <header class="panel-heading text-center">
          <img src="../img/logo2.png" width="300">
          <h4 style='color:#fff'> Account Login</h4>
        </header>
        
        
        
 <form action="#" method="post" class="panel-body wrapper-lg">
        




    
     <p class="form-group">
            <label class="control-label">Email</label>
            <input type="email" placeholder="youremail@mail.com" name="email" required class="form-control input-lg">
          </p>
          <p class="form-group">
            <label class="control-label">Password</label>
            <input type="password" id="inputPassword" placeholder="Password" required name="password" class="form-control input-lg">
          </p>






<div class="g-recaptcha" data-theme="light" data-sitekey="6LezfqEeAAAAAHAZ89ED0n9FLHt3da0ZRQUJSjIS" style="transform:scale(0.77);-webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;"></div>
<br>
     
          
           <button type="submit" style="background-color: #005bcc" class="btn btn-warning btn-block">Login</button>
          <div class="line line-dashed"></div>

           <p class="text-muted text-center"><small><a href="recover.html" style='color:#FFf'>Reset Password</a></small></p>
          
          <p class="text-muted text-center" ><small><a href="register.php" style='color:#Fff'>Do not have an account?</a></small></p>
    

         
        
        </form>
      </section>
    </div>
  </section>
  <!-- footer -->
  <footer id="footer">
    <div class="text-center padder">
     
    </div>
  </footer>
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