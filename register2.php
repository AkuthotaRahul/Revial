<?php include("config.php") ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];
//$phno=$_POST['phno'];
$birthday=$_POST['dob'];

$myemail_id=$_POST['email_id'];


	//creating a date object
	// $date1 = date_create('1988-09-26'); 
	$date1 = date_create($_POST['dob']); 
	// $date2 = date_create('2016-04-01');
	$date2 = date_create(date('d-m-y'));
	$diff12 = date_diff($date2, $date1);

	//accesing days
	$days = $diff12->d;
	//accesing months
	$months = $diff12->m;
	//accesing years
	$years = $diff12->y;

	//echo "The difference <br />is:  $days day(s) - $months  month(s) - $years  year(s)";
	//echo "$years";

	echo "<br />";
	echo "<br />";
	echo "<br />";

	if($years < 18) {
		echo "Age must be greater then 18";
		exit();
	} 
if(empty($myusername) || empty($mypassword) ||  empty($myemail_id))
{
		echo "<font size='6' color='#FFF' style='background-color:red'> Error Details incorrect. Enter all the fields in the form and try again </font>";
}
else
{
		mysql_query("INSERT INTO `patient_register` (`username`, `password`, `dob`,  `email_id`) VALUES ('$myusername', '$mypassword','$birthday','$myemail_id')");
		echo "<font size='9' color='#FFF' style='background-color:green'> SUCCESSFULLY REGISTERED </font>";
		
		
		$error="<font size='6' color='#FFF' style='background-color:#4BE916'>  </font>";
		echo($error);
}
}
?>