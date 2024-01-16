<?php
session_start();
include("../config/config.php");
include("../config/functions.php");

$user_data = check_login($link);

if ($user_data) {
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Initialize variables with default values
        $username = $fname = $email = $currency = $gender = $plan = $phone = $country = $walletbalance = $btc_wallet = $eth_wallet = $ltc_wallet = '';

        // Check and set values if they exist in $_POST
        if (isset($_POST['username'])) $username = mysqli_real_escape_string($link, $_POST['username']);
        if (isset($_POST['fname'])) $fname = mysqli_real_escape_string($link, $_POST['fname']);
        if (isset($_POST['email'])) $email = mysqli_real_escape_string($link, $_POST['email']);
        if (isset($_POST['currency'])) $currency = mysqli_real_escape_string($link, $_POST['currency']);
        if (isset($_POST['gender'])) $gender = mysqli_real_escape_string($link, $_POST['gender']);
        if (isset($_POST['plan'])) $plan = mysqli_real_escape_string($link, $_POST['plan']);
        if (isset($_POST['phone'])) $phone = mysqli_real_escape_string($link, $_POST['phone']);
        if (isset($_POST['country'])) $country = mysqli_real_escape_string($link, $_POST['country']);
        if (isset($_POST['walletbalance'])) $walletbalance = mysqli_real_escape_string($link, $_POST['walletbalance']);
        if (isset($_POST['btc_wallet'])) $btc_wallet = mysqli_real_escape_string($link, $_POST['btc_wallet']);
        if (isset($_POST['eth_wallet'])) $eth_wallet = mysqli_real_escape_string($link, $_POST['eth_wallet']);
        if (isset($_POST['ltc_wallet'])) $ltc_wallet = mysqli_real_escape_string($link, $_POST['ltc_wallet']);

        // Update the user information in the database
        $update_query = "UPDATE users SET
            username = '$username',
            fname = '$fname',
            email = '$email',
            currency = '$currency',
            gender = '$gender',
            plan = '$plan',
            phone = '$phone',
            country = '$country',
            walletbalance = '$walletbalance',
            btc_wallet = '$btc_wallet',
            eth_wallet = '$eth_wallet',
            ltc_wallet = '$ltc_wallet'
            /* Add more fields here with their respective variables */
            WHERE id = " . $user_data['id'];

        $update_result = mysqli_query($link, $update_query);

        if ($update_result) {
            // Update successful
            echo "Profile updated successfully!";
            
            // Update the $user_data array with the new values
            $user_data['username'] = $username;
            $user_data['fname'] = $fname;
            $user_data['email'] = $email;
            $user_data['currency'] = $currency;
            $user_data['gender'] = $gender;
            $user_data['plan'] = $plan;
            $user_data['phone'] = $phone;
            $user_data['country'] = $country;
            $user_data['walletbalance'] = $walletbalance;
            $user_data['btc_wallet'] = $btc_wallet;
            $user_data['eth_wallet'] = $eth_wallet;
            $user_data['ltc_wallet'] = $ltc_wallet;
            /* Update other fields in $user_data as needed */
        } else {
            // Update failed
            echo "Error updating profile. Please try again.";
        }
    }
} else {
    echo "<h1>Please log in.</h1>";
}
?>






<!DOCTYPE html>
<html lang="en" class="app">

<head>
    <meta charset="utf-8" />

</head>






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
    <!--[if lt IE 9]>
    <script src="js/ie/h tml5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
    <link href="box.css" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon1.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            color: #86889a;
        }

        .sidebar {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #0a1119;
            background-image: url(https://Globalbitasset.com/account/img/body-bg.jpg);
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
            width: 100%;
        }

        .navbar {
            background-color: #0000;
            overflow: hidden;
            height: 63px;
        }

        .navbar a {
            float: right;
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

        .navbar div {
            float: left;
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

        .navbar ul {
            margin: 20 0 0 0;
            list-style: none;
            height: 63px;
        }

        span {
            margin: 20 0 0 0;
            list-style: none;
            height: 63px;
        }

        .navbar a:hover {
            color: #312e2e;
        }

        /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */

        /*@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}*/

        @media screen and (max-width : 768px) {
            .body {
                width: 100%;
            }
            .navbar a img {
                padding: 0px 10px;
                margin: 50 0 50 0;
            }
        }

        .modal {
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */

        .modal-content {
            position: relative;
            background-color: #fefefe;
            margin: auto;
            padding: 0;
            border: 1px solid #888;
            width: 80%;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            -webkit-animation-name: animatetop;
            -webkit-animation-duration: 0.4s;
            animation-name: animatetop;
            animation-duration: 0.4s
        }

        /* Add Animation */

        @-webkit-keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
        }

        @keyframes animatetop {
            from {
                top: -300px;
                opacity: 0
            }
            to {
                top: 0;
                opacity: 1
            }
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

        .modal-body {
            padding: 2px 16px;
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

                        <center>
                            <h4 style='color:#fff'>Buy Bitcoin </h4>
                        </center>

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

                .sidenav a,
                .dropdown-btn {
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

                .sidenav a:hover,
                .dropdown-btn:hover {
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


            <a href="withdraw.php">
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
                .dropbtn:hover,
                .dropbtn:focus {
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
                    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                    z-index: 1;
                }

                .dropdown-content a {
                    color: #61ce70;
                    padding: 5px;
                    text-decoration: none;
                    display: block;
                }

                .show {
                    display: block;
                }
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
                    @media screen and (max-width : 450px) {
                        .body {
                            width: 100%;
                        }
                        .navbar a img {
                            padding: 0px 10px;
                            margin: 5 0 20 0;
                        }
                        .navbar a {
                            float: right;
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
                            float: left;
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
                    document.getElementById("main").style.marginLeft = "0";
                }
            </script>






            <div class="row">
                <div class="col-lg-12" style="background-color:#121629; color:#fff">
                    <section class="panel" style="background-color:#121629; color:#fff">
                        <header class="panel-heading">
                            <H3 style="color: #fff"> My Profile</H3>
                        </header>
                        <center>
                            <a href="" target="_blank"><img src="" width="60" height="60" class="avatar"></a>
                        </center> <br>
                        <a href="changeavatar.php">
                            <p style="color: #fff" align="center">Change Profile Picture</p>
                        </a>


                        <div class="panel-body" style="background-color:#121629; color:#fff">
                   <form method="post" action="">
                        <table class="ui striped celled table customtable feedbacktable">
                            <tbody>
                                <tr>
                                    <td style="padding-left:20px;">Full Name</td>
                                    <td><input type="text" class="form-control" name="fname" value="<?php echo $user_data['fname']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;" width="30%">Username</td>
                                    <td width="70%"><input type="text" name="username" class="form-control" value="<?php echo $user_data['username']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">Email</td>
                                    <td><input type="text" class="form-control" name="email" value="<?php echo $user_data['email']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">Mobile Number</td>
                                    <td><input type="text" class="form-control" name="phone" value="<?php echo $user_data['phone']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">Balance</td>
                                    <td><input type="text" class="form-control" value="<?php echo $user_data['walletbalance']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">Currency</td>
                                    <td><input type="text" class="form-control" value="<?php echo $user_data['currency']; ?>" /></td>
                                </tr>
                                
                                <!-- Add other fields as needed -->
                                <tr>
                                    <td style="padding-left:20px;">Plan</td>
                                    <td><input type="text" class="form-control" name="plan" value="<?php echo $user_data['plan']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">Gender</td>
                                    <td><input type="text" class="form-control" name="gender" value="<?php echo $user_data['gender']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">BTC WALLET</td>
                                    <td><input type="text" class="form-control" name="address" value="<?php echo $user_data['btc_wallet']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">ETH WALLET</td>
                                    <td><input type="text" class="form-control" name="city" value="<?php echo $user_data['eth_wallet']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td style="padding-left:20px;">LTC WALLET</td>
                                    <td><input type="text" class="form-control" name="country" value="<?php echo $user_data['ltc_wallet']; ?>" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="text-align:center;">
                                        <input type="submit" style="background-color:#18d39f" class="btn btn-info" value="Update Profile" name="submit"/>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>


                        </div>
                </div>

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