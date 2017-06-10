<?php
require_once 'database.php';
if (isset($_POST['username']) && isset($_POST['password'])&& !empty($_POST['username'])&& !empty($_POST['password']))
{
    $password = $_POST['password'];
    $username = $_POST['username'];
}

$sql = "SELECT * FROM tbl_users WHERE username = '$username' AND password = '$password'";
$amount = $db->query($sql)->rowCount();

if ($amount == 1){
    session_start();
    $_SESSION['loggedIn'] = true;
    $_SESSION['username'] = $username;
    header("Location: ../public/home.php");
}