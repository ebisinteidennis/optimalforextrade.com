<?php
session_start();
    include("../config/config.php");
    include("../config/functions.php");
    
    $user_data = check_login($link);
    if ($user_data) {
    // The user is logged in, so let's retrieve the username from the user data
    $username = $user_data['username']; // Assuming 'username' is a field in your user data
    $fname = $user_data['fname'];
    $profit = $user_data['profit'];
    $email = $user_data['email'];
    $currency = $user_data['currency'];
    $gender = $user_data['gender'];
    $plan = $user_data['plan'];
    $phone = $user_data['phone'];
    $country = $user_data['country'];
    $referral = $user_data['referral'];
    $balanceloss = $user_data['balanceloss'];
    $balancelive = $user_data['balancelive'];
    $balancemine = $user_data['balancemine'];
    $totalwon = $user_data['totalwon'];
    $walletbalance = $user_data['walletbalance'];
    $upgrade = $user_data['upgrade'];
    $btc_wallet = $user_data['btc_wallet'];
    $eth_wallet = $user_data['eth_wallet'];
    $ltc_wallet = $user_data['ltc_wallet'];
    // Include the welcome message HTML
    } else {
        echo "<h1>Please log in.</h1>";
    }
?>


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
  
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i|Comfortaa:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/h tml5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
<link href="box.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon1.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



 <!--  we addeded files from here -->

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">





<script src="//code.tidio.co/se0mwpqarlqproit75tqkmu0o7jltosu.js" async></script>

<!-- we added style  -->
<style>
body {
  font-family: "Lato", sans-serif;
  background-color: #121629;
  color:#86889a;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #0a1119;
   background-image:url(https://Globalbitasset.com/account/img/body-bg.jpg);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 25px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #fff;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #03c450;
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

#main {

  transition: margin-left 0.5s;
  padding: 0px;
  overflow: hidden;
  width:100%;

    
}


  .navbar{
    background-color: #0000;
    overflow: hidden;
    height: 63px;
  }

  .navbar a{
        float:right;
        display: block;
        color: #edecec;
        text-align: center;
        padding: 10px 10px;
        text-decoration: none;
        font-size: 17px;
        margin: 20 0 0 0;
        margin-right: 10px;
 height: 63px;
  }
  .navbar div{
        float:left;
        display: block;
        color: #000;
        text-align: center;
        padding: 0px 25px;
        text-decoration: none;
        font-size: 17px;
        margin: 20 0 0 0;
        margin-left: 10px;
 height: 63px;
  }


  .navbar ul{
    margin: 20 0 0 0;
    list-style: none;
    height: 63px;
  }

   span{
    margin: 20 0 0 0;
    list-style: none;
    height: 63px;
  


  }

  .navbar a:hover{
    
    color: #000;
  }


/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
/*@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}*/

@media screen and (max-width:  768px){
 .body {
  width: 100%;
  
}


  .navbar a img{
padding: 0px 10px;
margin: 50 0 50 0;
  }

} 

.modal {
  
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
  background-color: #03c450;
  color: #fff;
}

.modal-body {padding: 2px 16px;
background-color: #03c450;}

.modal-footer {
  padding: 2px 16px;
  background-color: #03c450;
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
.avatar {
  vertical-align: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}
</style>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  
  
  
   <a class="active" href="https://optimalforextrade.com/"><i class="fa fa-fw fa-home"></i> Home</a> 
   
       
          <a href="index.php">
            <i class="fa fa-tachometer" aria-hidden="true"></i> <span>Dashboard</span>
          
          </a>

<a href="profile.php">
            <i class="fa fa-user"></i></i> <span>Account</span>
          
          </a>


     
          <a id="myBtn2" href="#" data-toggle="modal" data-target="#buybtc">
            <i class="fa fa-bitcoin"></i> <span>Buy</span>
           
          </a>

<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2></h2>
    </div>
    <div class="modal-body">

       <center><h4 style='color:#fff'>Buy  Bitcoin </h4></center>
        
        <a href="https://buy.bitcoin.com/" class="btn btn-info btn-block" target="_blank">Bitcoin.com</a>
        <a href="https://www.cex.io" class="btn btn-info btn-block" target="_blank">CEX.io</a>
        <a href="https://www.coinbase.com/" class="btn btn-info btn-block" target="_blank">Coin Base</a>
        <a href="https://www.localbitcoins.com" class="btn btn-info btn-block" target="_blank">Local Bitcoins</a>
       <a href="https://www.abra.com" class="btn btn-info btn-block" target="_blank"> Abra</a>
       <a href="https://www.coinmama.com" class="btn btn-info btn-block" target="_blank"><strong>CoinMama</strong></a>
        <a href="https://www.paxful.com" class="btn btn-info btn-block" target="_blank">Paxful</a>
            </div>
    <div class="modal-footer">
        <button class="btn-close-modal">Close Modal</button>
      <h3></h3>
    </div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

var closeButton = document.querySelector(".btn-close-modal");

// Function to close the modal
function closeModal() {
  modal.style.display = "none";
}

// When the user clicks the close button in the modal footer, close the modal
closeButton.onclick = function() {
  closeModal();
};


</script>

  <style>


..btn-close-modal {
  padding: 10px 20px;
  background-color: #0094fe;
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
  display: inline-block; /* Ensures button's boundaries match its content */
  line-height: 1; /* Fixes potential extra space due to line-height */
}

.btn-close-modal:hover {
  background-color: #0077cc;
}
/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 25px 8px 8px 32px; 
  text-decoration: none;
  font-size: 15px;
  color: #fff;
  display: block;
  transition: 0.3s;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #0094fe;
}


/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #0a1119;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
}

</style>

<a href="deposit.php">
            <i class="fa fa-bitcoin"></i> <span> Deposit</span>
          
          </a>
        
      
          <a  href="withdraw.php">
            <i class="fa fa-money"></i> </i> <span> Withdraw</span>
          
          </a>

<a href="history.php">
           <i class="fa fa-angle-double-up"></i> <span> History</span>
          
          </a>
          
          
            <a href="upgrade.php">
            <i class="fa fa-shield"></i> <span>Upgrade</span>
          
          </a>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>
           
           
           
           
      

 <a href="payment.php">
           <i class="fa fa-bitcoin"></i> <span> Crypto & Fiat Wallet</span>
          
          </a>

          







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
<!--
<div class="dropdown">
   <a onclick="myFunction()" class="dropbtn"><i class="fa fa-user"></i>My Profile</a>
  <div id="myDropdown" class="dropdown-content">
    <a href="profile"> Edit Profile</a>
    <a href="changeavatar"> Change Avatar</a>
    
  </div>
</div>
-->
 
          <a href="changepass"><i class="fa fa-lock"></i>  Change Password</a>
     <a href="../account/user/logout.php">
            <i class="fa fa-user"></i></i> <span>Logout</span>
          </a>
                

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>



        


        <!--
          <a href="change_password.php">
            <i class="fa fa-lock"></i> <span>Change Password</span>
            

            <i class="fa fa-shield"></i>
          </a>  -->
        
      
        
       
      


</div>

<div id="main">
<!--  <button class="openbtn" onclick="openNav()">☰</button> --> 
  <nav class="navbar">

  <span class="open-slide">

    <a href="#" onclick="openNav()">
     <svg width="30" height="40">
        <path d="M0,5 30,5" stroke="#fff" stroke-width="5"/>
        <path d="M0,14 30,14" stroke="#fff" stroke-width="5"/>
        <path d="M0,23 30,23" stroke=#fff stroke-width="5"/>
      </svg>

</a>


  </span>
  
  <style>
      
      @media screen and (max-width:  450px){
 .body {
  width: 100%;
  
}


  .navbar a img{
padding: 0px 10px;
margin: 5 0 20 0;
  }


 .navbar a{
        float:right;
        display: block;
        color: #000;
        text-align: center;
        padding: 10px 0px;
        text-decoration: none;
        font-size: 17px;
        margin: 10 0 0 0;
        margin-right: 5px;
 height: 63px;
  }
  .navbar div a {
        float:left;
        display: block;
        color: #000;
        text-align: center;
        padding: 0px 0px;
        text-decoration: none;
        font-size: 17px;
        margin: 0 0 0 0;
        margin-left: 0px;
 height: 50px;
  }




} 
      
  </style>

  <ul class="navbar-nav">
  <!-- <li><a class="active" href="#"><i class="fa fa-fw fa-home"></i> Home</a> </li>  -->
  
  <div>
      <a href="index.php"><img src="../img/logo2.jpg" width="190"> </a>
      </div>
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
   









<style>
    
*{
    
    margin-right: 0px;
    margin-left: 0px;

 margin:0px;
 padding: 0px;
}
body, html {
  width: 100%;
  height: 100%;
  background-image:url(https://Globalbitasset.com/account/img/body-bg.jpg);
}


@media screen and (max-width:  768px){
 .body {
  width: 100%;
  height: 100px;
 }
} 

</style>






<body>

<!--

-->

 


        <section id="main" >
<section  class="main">          
            <section class="scrollable padder">


             <div class="m-b-md" style="margin-top:0px">
                <!-- <h3 class="m-b-none">Dashboard</h3> -->

<style>
.avatar {
  vertical-align: center;
  width: 50px;
  height: 50px;
  border-radius: 50%;
}

.h5{
    font-size:20px;
}


</style>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
    }
    .welcome-message {
        font-size: 20px;
        margin-bottom: 20px;
    }
    .profile-pic-form {
        margin-bottom: 20px;
    }
    .uploaded-image {
        max-width: 300px;
        height: auto;
        margin-top: 20px;
        overflow: hidden; /* Hide overflow content outside the rounded border */
    }
    .uploaded-image img {
        border-radius: 50%; /* Make the uploaded image round */
        display: block; /* Ensure the image is displayed as a block element */
        margin: 0 auto; /* Center the image horizontally */
    }
</style>
      
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["profile_picture"])) {
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES["profile_picture"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the uploaded file is an image and perform other necessary validations...

    if ($uploadOk == 1) {
        if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $targetFile)) {
            $imagePath = $targetFile;

            // Perform SQL query to update 'image' column in the 'users' table for the specific user
            $updateQuery = "UPDATE users SET image = '$imagePath' WHERE fname = '$fname'";
            $result = mysqli_query($link, $updateQuery);

            if ($result) {
                echo "Image uploaded and saved successfully.";
            } else {
                echo "Error updating image in the database: " . mysqli_error($link);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Retrieve image path from the database for the user
$imageQuery = "SELECT image FROM users WHERE fname = '$fname'";
$imageResult = mysqli_query($link, $imageQuery);
$imageRow = mysqli_fetch_assoc($imageResult);
$imagePathFromDB = $imageRow['image'] ?? ''; // Get the image path or an empty string if not found
?>

    <font size="3">
        Hello <b><?php echo $fname; ?>!</b>
    </font>
    <p>Welcome to Optimalforextrade</p>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture">
        <input type="submit" value="Upload" name="submit">
    </form>

    <!-- Display uploaded image for the user -->
    <?php if (!empty($imagePathFromDB)) : ?>
        <h2>Your Uploaded Image:</h2>
        <img src="<?php echo $imagePathFromDB; ?>" alt="Uploaded Image" width="300">
    <?php endif; ?>
    </div>
              
              
              
              
              
              

<style>

ul {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

ul li {
  margin-top: -1px; /* Prevent double borders */
  background-color: #121629;
  padding:;
  text-decoration: none;
  font-size: 20px;
  color: #fff;
  display: block;
  position: relative;
}

ul li:hover {
  background-color:;
}

.close {
  cursor: pointer;
  position: absolute;
  top: 50%;
  right: 0%;
  padding: 12px 16px;
  transform: translate(0%, -50%);
  
}

.close:hover {background: #bbb;}
</style>

<center>
    
    
    
        
    
    
    
    


    


</center>


<script>
var closebtns = document.getElementsByClassName("close");
var i;

for (i = 0; i < closebtns.length; i++) {
  closebtns[i].addEventListener("click", function() {
    this.parentElement.style.display = 'none';
  });
}
</script>

<br><br>
              
              
              
              
              
              
              
              
              
   
              
                                                    <div class="mother">
                                                      <!-- TradingView Widget BEGIN -->
                                                          <div style="width: 100%; height: 100%;"><style>
  .tradingview-widget-copyright {
    font-size: 13px !important;
    line-height: 32px !important;
    text-align: center !important;
    vertical-align: middle !important;
    font-family: 'Trebuchet MS', Arial, sans-serif !important;
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright .blue-text {
    color: #2196f3 !important;
  }

  .tradingview-widget-copyright a {
    text-decoration: none !important;
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright a:visited {
    color: #9db2bd !important;
  }

  .tradingview-widget-copyright a:hover .blue-text {
    color: #38acdb !important;
  }

  .tradingview-widget-copyright a:active .blue-text {
    color: #299dcd !important;
  }

  .tradingview-widget-copyright a:visited .blue-text {
    color: #2196f3 !important;
  }
  </style><iframe scrolling="no" allowtransparency="true" frameborder="0" src="https://s.tradingview.com/embed-widget/mini-symbol-overview/?locale=en#%7B%22symbol%22%3A%22COINBASE%3ABTCUSD%22%2C%22width%22%3A%22100%25%22%2C%22height%22%3A%22100%25%22%2C%22dateRange%22%3A%221m%22%2C%22colorTheme%22%3A%22dark%22%2C%22trendLineColor%22%3A%22%2337a6ef%22%2C%22underLineColor%22%3A%22rgba(55%2C%20166%2C%20239%2C%200.15)%22%2C%22isTransparent%22%3Afalse%2C%22autosize%22%3Atrue%2C%22largeChartUrl%22%3A%22%22%2C%22utm_source%22%3A%22www.forexbulloption.com%22%2C%22utm_medium%22%3A%22widget%22%2C%22utm_campaign%22%3A%22mini-symbol-overview%22%7D" style="box-sizing: border-box; height: 100%; width: 100%;"></iframe></div>
                                                        <!-- TradingView Widget END -->
                                                
              
              
              
              
              
              
              
              
              
              
              
              
<div class="rows"> 



<section class="panel panel-default" style="
  margin: 0px 0px 0px -30px;">
                <div >
                    
                    <div class="card-container col-lg-2 col-sm-4 col-xs-6">
    <div class="card" style="border-radius: 10px;
  background: #0a1121;
  padding: 20px 0px 20px 15px; 
  width: 170px;
  height: 100px; 
  margin: 5px;
  box-shadow: 2px 2px 2px #005bcc;">
        <div class="front bg-slategray" style="border-bottom: 2px solid rgba(210, 229, 240, 0.79);">

            <!-- row -->
            <div class="row">
                <!-- col -->
                
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                         <i class="fa fa-square fa-stack-2x" style="color:#fff"></i>
                      <i class="fa fa-square  fa-stack-2x fa-fw text-" style="color:#005bcc;opacity: 0.9;"></i>

                      <i class="fa fa-signal fa-stack-1x"style="color:#fff"></i>
                    </span>
                    <a class="clear" href="" >
                      <span class=" "><b style="color: #fff"><strong>   $<?php echo $balancelive; ?></strong></b></span>
                  <br/>  <p class="text-muted " style="color: #fff">Live</p>
                    </a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <br/>
    </div>
</div>

  



  <div >
<div class="card-container col-lg-2 col-sm-4 col-xs-6">
    <div class="card" style="border-radius: 10px;
  background: #0a1121;
padding: 20px 0px 20px 15px; 
  width: 170px;
  height: 100px; 
  margin: 5px;
  box-shadow: 2px 2px 2px #03c450;">
        <div class="front bg-slategray" style="border-bottom: 2px solid rgba(210, 229, 240, 0.79);">

            <!-- row -->
            <div class="row">
                <!-- col -->
                
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                         <i class="fa fa-square fa-stack-2x" style="color:#fff"></i>
                      <i class="fa fa-square  fa-stack-2x fa-fw text-" style="color:#03c450;opacity: 0.9;"></i>

                      <i class="fa fa-money fa-stack-1x"style="color:#fff"></i>
                    </span>
                    <a class="clear" href="" >
                      <span class=" "><b style="color: #fff"><strong>   $ <?php echo $profit; ?> </strong></b></span>
                  <br/>  <p class="text-muted " style="color: #fff">Profit</p>
                    </a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <br/>
    </div>
</div>


  <div >
<div class="card-container col-lg-2 col-sm-4 col-xs-6">
    <div class="card" style="border-radius: 10px;
  background: #0a1121;
  padding: 20px 0px 20px 15px; 
  width: 170px;
  height: 100px; 
  margin: 5px;
  box-shadow: 2px 2px 2px #0094fe;">
        <div class="front bg-slategray" style="border-bottom: 2px solid rgba(210, 229, 240, 0.79);">

            <!-- row -->
            <div class="row">
                <!-- col -->
                
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                         <i class="fa fa-square fa-stack-2x" style="color:#fff"></i>
                      <i class="fa fa-square  fa-stack-2x fa-fw text-" style="color:#0094fe;opacity: 0.9;"></i>

                   
                    
                    
                    
                    <i class="fa fa-money fa-stack-1x"style="color:#fff"></i>
                    </span>
                    <a class="clear" href="" >
                      <span class=" "><b style="color: #fff"><strong>   $ <?php echo $walletbalance; ?> </strong></b></span>
                  <br/>  <p class="text-muted " style="color: #fff">Balance</p>
                    </a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <br/>
    </div>
</div>


  <div >
<div class="card-container col-lg-2 col-sm-4 col-xs-6">
    <div class="card" style="border-radius: 10px;
  background: #0a1121;
padding: 20px 0px 20px 15px; 
  width: 170px;
  height: 100px; 
  margin: 5px;
  box-shadow: 2px 2px 2px #03c450;">
        <div class="front bg-slategray" style="border-bottom: 2px solid rgba(210, 229, 240, 0.79);">

            <!-- row -->
            <div class="row">
                <!-- col -->
                
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                         <i class="fa fa-square fa-stack-2x" style="color:#fff"></i>
                      <i class="fa fa-square  fa-stack-2x fa-fw text-" style="color:#03c450;opacity: 0.9;"></i>

                      <i class="fa fa-check fa-stack-1x"style="color:#fff"></i>
                    </span>
                    <a class="clear" href="" >
                      <span class=" "><b style="color: #fff"><strong>  $<?php echo $totalwon; ?> </strong></b></span>
                  <br/>  <p class="text-muted " style="color: #fff">Total Won</p>
                    </a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <br/>
    </div>
</div>

 <div >
<div class="card-container col-lg-2 col-sm-4 col-xs-6">
    <div class="card" style="border-radius: 10px;
  background: #0a1121;
 padding: 20px 0px 20px 15px; 
  width: 170px;
  height: 100px; 
  margin: 5px;
  box-shadow: 2px 2px 2px #d20505;">
        <div class="front bg-slategray" style="border-bottom: 2px solid rgba(210, 229, 240, 0.79);">

            <!-- row -->
            <div class="row">
                <!-- col -->
                
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                         <i class="fa fa-square fa-stack-2x" style="color:#fff"></i>
                      <i class="fa fa-square  fa-stack-2x fa-fw text-" style="color:#d20505;opacity: 0.9;"></i>

                      <i class="fa fa-ban fa-stack-1x"style="color:#fff"></i>
                    </span>
                    <a class="clear" href="" >
                      <span class=" "><b style="color: #fff"><strong> $ <?php echo $balanceloss; ?></strong></b></span>
                  <br/>  <p class="text-muted " style="color: #fff">Total Loss</p>
                    </a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <br/>
    </div>
</div>


    </div>            
               <div >
<div class="card-container col-lg-2 col-sm-4 col-xs-6">
    <div class="card" style="border-radius: 10px;
  background: #0a1121;
  padding: 20px 0px 20px 15px; 
  width: 170px;
  height: 100px; 
  margin: 5px;
  box-shadow: 2px 2px 2px #e8c63e;">
        <div class="front bg-slategray" style="border-bottom: 2px solid rgba(210, 229, 240, 0.79);">

            <!-- row -->
            <div class="row">
                <!-- col -->
                
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                         <i class="fa fa-square fa-stack-2x" style="color:#fff"></i>
                      <i class="fa fa-square  fa-stack-2x fa-fw text-" style="color:#e8c63e;opacity: 0.9;"></i>

                      <i class="fa fa-file fa-stack-1x"style="color:#fff"></i>
                    </span>
                    <a class="clear" href="" >
                      <span class=" "><b style="color: #fff"><strong>   $<?php echo $balancemine; ?> </strong></b></span>
                  <br/>  <p class="text-muted " style="color: #fff">Mine</p>
                    </a>
                </div>
                <!-- /col -->
            </div>
            <!-- /row -->

        </div>
        <br/>
    </div>
</div>
 
         </section>       




</div>
</div>

      
 <div class="col-md-8">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container" style="height:450px; margin: 0px;">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener noreferrer" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async="">
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "INDEX:SPX"
    },
    {
      "title": "Shanghai Composite",
      "proName": "INDEX:XLY0"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITFINEX:ETHUSD"
    }
  ],
  "theme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->





 

<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_e4315" style="height: 400px"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BTCUSD/?exchange=BITSTAMP" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "autosize": true,
  "symbol": "BITSTAMP:BTCUSD",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "dark",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_e4315"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->

</div>

 




<div class="col-md-4">

                            <!-- tile -->
                            <section class="tile bg-slategray" fullscreen="isFullscreen02">

                       

                                <!-- tile body -->
                                <div class="tile-body p-0 row">

                                   
<div class="col-md-6 col-sm-6">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "FX:EURUSD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1d",
  "colorTheme": "dark",
  "trendLineColor": "rgba(111, 168, 220, 0.9)",
  "underLineColor": "rgba(201, 218, 248, 0.22)",
  "isTransparent": true,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
<div class="col-md-6 col-sm-6">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "FX:GBPUSD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1d",
  "colorTheme": "dark",
  "trendLineColor": "rgba(111, 168, 220, 0.9)",
  "underLineColor": "rgba(201, 218, 248, 0.22)",
  "isTransparent": true,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>

<div class="col-md-6 col-sm-6">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "FX:EURCAD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1d",
  "colorTheme": "dark",
  "trendLineColor": "rgba(111, 168, 220, 0.9)",
  "underLineColor": "rgba(201, 218, 248, 0.22)",
  "isTransparent": true,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
<div class="col-md-6 col-sm-6">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:BTCUSD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1d",
  "colorTheme": "dark",
  "trendLineColor": "rgba(111, 168, 220, 0.9)",
  "underLineColor": "rgba(201, 218, 248, 0.22)",
  "isTransparent": true,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
</div>
<!-- TradingView Widget END -->
<div class="col-md-6 col-sm-6">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:ETHUSD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1d",
  "colorTheme": "dark",
  "trendLineColor": "rgba(111, 168, 220, 0.9)",
  "underLineColor": "rgba(201, 218, 248, 0.22)",
  "isTransparent": true,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->
</div>
<div class="col-md-6 col-sm-6">
<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
  {
  "symbol": "COINBASE:LTCUSD",
  "width": "100%",
  "height": "100%",
  "locale": "en",
  "dateRange": "1d",
  "colorTheme": "dark",
  "trendLineColor": "rgba(111, 168, 220, 0.9)",
  "underLineColor": "rgba(201, 218, 248, 0.22)",
  "isTransparent": true,
  "autosize": true,
  "largeChartUrl": ""
}
  </script>
</div>
<!-- TradingView Widget END -->


                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        </div>
                        <!-- /col -->





</div>








<!--  we added btc adrress section  style="background-color: #000" -->

                    



<div class="col-lg-12 col-md-12 col-sm-12">
    
                        <div class="white-box" style="height: 500px;">

               


<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
  {
  "width": "100%",
  "height": "100%",
  "currencies": [
    "EUR",
    "USD",
    "JPY",
    "GBP",
    "CHF",
    "AUD",
    "CAD",
    "NZD",
    "CNY",
    "DKK",
    "ZAR",
    "PHP"
  ],
  "isTransparent": false,
  "colorTheme": "dark",
  "locale": "en"
}
  </script>
</div>
<!-- TradingView Widget END -->
 </div>

<!DOCTYPE html>
<html>
<head>


<style>

footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
  text-align: left;
  padding: 3px 10px;
  background-color: #000;
  color: white;
}
</style>



</head>
<body>


<br><br/>
<footer><b>
  <p>Auto-Trade:  <span style="color:#00ce1b;">Active</span>     <span style="padding:10px;">Signal Fee <span style="color:#0094fe;"> $   </span>

<br> </p></b>
</footer>



</body>
</html>


</body> </html>