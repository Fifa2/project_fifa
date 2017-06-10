<?php
require_once 'database.php';
if (isset($_POST['username']) && !empty ($_POST['username']))
{
    $username = $_POST['username'];

}
if (isset($_POST['password']) && !empty ($_POST['password']))
{
    $password = $_POST['password'];

}
if (isset($_POST['email']) && !empty ($_POST['email']))
{
    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo "Email is valid.";
    }
    else
    {
        echo "Email is invalid.";
    }
}
$sql = "INSERT INTO tbl_users (username, password, email) VALUES ('$username', '$password', '$email')";
$db->query($sql);
header("Location: ../public/home.php?message=$message");