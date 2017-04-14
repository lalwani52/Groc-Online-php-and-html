<?php

$conn = mysqli_connect('localhost','root','','login');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$firstname=$_POST['fname'];
$emailid=$_POST['email'];
$passwordch=$_POST['password'];
$sql = "INSERT INTO `login_users`(`username`, `email`, `password`) VALUES ('$firstname','$emailid','$passwordch');";

if (mysqli_query($conn, $sql)) {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sign Up Succesful!')
        window.location.href='main.html'
        </SCRIPT>");
} else {
    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Please re-enter correctly.')
        window.location.href='signup.html'
        </SCRIPT>");
}

mysqli_close($conn);
?>