<?php
mysql_connect("localhost", "root", "") or die("mysql connection is failure.");
mysql_select_db("login") or die("Database does not exists.");
if (isset($_POST['submit'])){
$username=$_POST['uname'];
$password=$_POST['pass'];

$sql= mysql_query("SELECT * FROM `login_users` WHERE `username` = '$username' AND `password` = '$password'");
if(mysql_num_rows($sql) > 0)
{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Login Succesful!')
        window.location.href='main.html'
        </SCRIPT>");
exit();
}
else{
echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Wrong username and password combination.Please re-enter.')
        window.location.href='form.html'
        </SCRIPT>");
exit();
}
}
else{
}
?>