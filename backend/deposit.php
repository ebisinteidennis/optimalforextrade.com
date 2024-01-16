<?php
session_start();
include("../config/config.php");
include("../config/functions.php");

?>







<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  </head>

       <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #343a40;
            color: #ffffff;
            padding: 10px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn {
            background-color: #007bff;
            border: none;
            color: #ffffff;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #495057;
        }

        input,
        select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ced4da;
            border-radius: 4px;
            box-sizing: border-box;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #dee2e6;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #007bff;
            color: #ffffff;
        }
    </style>

<body>
  





<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title> Globalbitasset | Forex pairs & CFDs on Shares, Indices, Energies, Metals & ETFs* </title>
  <meta name="description" content="Start trading on your terms" />
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
        .btn {
            background-color: #18d39f;
            border: none;
            color: white;
            padding: 5px 10px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
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
    
    color: #312e2e;
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
background-color: #03c450;
color: #fff;
    
}

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


  
<a href="" target="_blank"><img src="" width="50" height="50" class="avatar"></a>
<a href="changeavatar.php">Upload a Profile Picture</a>
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
</script>

          
           <style>


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
 
          <a href="changepass.html"><i class="fa fa-lock"></i>  Change Password</a>
     <a href="logout.php">
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
  
  <div><a href="index.php"><img src="../img/logo2.jpg" width="190"> </a></div>
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
   


              


    
<div class="row">
<div class="col-lg-12">
<div class="panel panel-green" style="background-color:#121629; color:#86889a">
  


<div class="panel-body" style="background-color:#121629; color:#86889a">
    <p align="center" style="color:#fff"><B>DEPOSIT</B></p>


   

                          
<!--new deposit button-->
<form method="post" action="deposit.php" class="form-horizontal" style="max-width: 500px;">
    <div class="form-actions">
        <div class="col-md-offset-3 col-md-6">
            <label for="usd">Enter USD Amount:</label>
            <input type="text" name="usd" id="usd" required>
            <br>
            <label for="wallet">Select Wallet:</label>
            <select name="wallet" id="wallet" required>
                <?php
                // Fetch and display wallet options
                $wallet_query = "SELECT id, name FROM wallets";
                $wallet_result = mysqli_query($link, $wallet_query);

                if ($wallet_result) {
                    while ($wallet_row = mysqli_fetch_assoc($wallet_result)) {
                        echo '<option value="' . $wallet_row['id'] . '">' . $wallet_row['name'] . '</option>';
                    }
                } else {
                    echo "Error fetching wallet options. Error details: " . mysqli_error($link);
                }
                ?>
            </select>
            <br>
            <button type="submit" class="btn">
                <i class="fa fa-plus-circle" aria-hidden="true"></i> New Deposit
            </button>
        </div>
    </div>
</form>


<!--end of new deposit button-->

<?
$user_data = check_login($link);

if ($user_data) {
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['usd'])) {
        // Collect relevant fields for deposit
        $user_id = $user_data['id'];
        $amount = mysqli_real_escape_string($link, $_POST['usd']);
        $wallet_id = mysqli_real_escape_string($link, $_POST['wallet']);

        // Generate a Bitcoin wallet address (replace this with your actual logic)
        $btc_wallet_address = generateBtcWalletAddress($wallet_id);

        // Insert deposit information into the database
        $insert_query = "INSERT INTO btc (userId, usd, method, status, date)
                        VALUES ('$user_id', '$amount', 'Bitcoin', 'Pending', NOW())";

        $insert_result = mysqli_query($link, $insert_query);

        if ($insert_result) {
            // Deposit information successfully stored
            echo "Deposit request submitted successfully! Please make the deposit to the following Bitcoin wallet address:";
            echo "<br>";
            echo $btc_wallet_address;
        } else {
            // Insert failed
            echo "Error submitting deposit request. Please try again.";
        }
    }

    // Display deposit history
    $user_id = $user_data['id'];
    $deposit_query = "SELECT id, date, usd, method, status FROM btc WHERE userId = '$user_id'";
    $deposit_result = mysqli_query($link, $deposit_query);

    if ($deposit_result) {
        if (mysqli_num_rows($deposit_result) > 0) {
            echo '<table class="table table-hover table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th><center>ID</center></th>';
            echo '<th><center>DATE CREATED</center></th>';
            echo '<th><center>USD</center></th>';
            echo '<th><center>PAYMENT METHOD</center></th>';
            echo '<th><center>STATUS</center></th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = mysqli_fetch_assoc($deposit_result)) {
                echo '<tr>';
                echo '<td><center>' . $row['id'] . '</center></td>';
                echo '<td><center>' . $row['date'] . '</center></td>';
                echo '<td><center>' . $row['usd'] . '</center></td>';
                echo '<td><center>' . $row['method'] . '</center></td>';
                echo '<td><center>' . $row['status'] . '</center></td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
        } else {
            echo '<p>No deposit history available.</p>';
        }
    } else {
        echo "Error fetching deposit history. Error details: " . mysqli_error($link);
    }
} else {
    echo "<h1>Please log in.</h1>";
}

// Function to generate a Bitcoin wallet address (replace this with your actual logic)
function generateBtcWalletAddress($wallet_id) {
    global $link;
    $wallet_id = mysqli_real_escape_string($link, $wallet_id);
    $wallet_query = "SELECT address FROM wallets WHERE id = '$wallet_id'";
    $wallet_result = mysqli_query($link, $wallet_query);
    
    if ($wallet_result && mysqli_num_rows($wallet_result) > 0) {
        $row = mysqli_fetch_assoc($wallet_result);
        return $row['address'];
    } else {
        return "Error generating wallet address.";
    }
}
?>
 </div>
 </div>
</div>
</div>



</div>

    </section>
    

    
    
    
    
    
</body>

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









