<?php
session_start();
include("../../config/config.php");
include("../../config/functions.php");

if(isset($_SESSION['user_id']))
{
  unset($_SESSION['user_id']);
}
header("Location: login.php");
die;
?>
