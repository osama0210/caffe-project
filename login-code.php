<?php
ob_start();
require_once ("connectie.php");

if (isset($_POST['username'])){
    if ($_POST['username'] == "coffee" && $_POST['password'] == "coffee")
        header('Location: admin.php');
    else {
        header("location: login.php");
    }
}
?>

