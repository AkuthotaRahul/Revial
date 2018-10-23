<?php session_start();?>

<?PHP include("config.php") ?>

<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form 
$myusername=addslashes($_POST['username']); 
$mypassword=addslashes($_POST['password']); 

$sql="SELECT `username`,`password` FROM patient_register WHERE username='$myusername' and password='$mypassword'";

$result=mysql_query($sql);
$row=mysql_fetch_array($result);
$count=mysql_num_rows($result);
 //If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//    echo("count is one 3");

$_SESSION['username']=$myusername;
$_SESSION['password']=$myusername;
header("location:home.html");
 exit();
}
else 
{
$error= "<font size='6' color='#FFF' style='background-color:red'> Error Details incorrect. Enter all the fields in the form and try again </font>";
echo($error);
}
}
?>