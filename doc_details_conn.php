<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="revival"; // Database name
$tbl_name="doc_details"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("revival")or die("cannot select DB");

// username and password sent from form
$image=$_FILES['attachment']['name'];
$name=$_POST['name'];
$mydetails=$_POST['details'];
$myemail=$_POST['email'];

if(empty($image) || empty($name) || empty($mydetails)|| empty($myemail))
{
		echo "<font size='6' color='#FFF' style='background-color:red'> Error Details incorrect. Enter all the fields in the form and try again </font>";
}
else
{
	$nm=$_FILES['attachment']['name'];
$ty=$_FILES['attachment']['type'];
$sz=$_FILES['attachment']['size'];

		if(file_exists("uploads/" .basename($_FILES['attachment']['name'])))
		{
		echo "";
		}
		else{
			
				if(move_uploaded_file($_FILES['attachment']['tmp_name'], "uploads/" . basename($_FILES['attachment']['name'])))
				{
			
				echo "uploaded";
				}
				else 
				{
				echo "error while uploading";
				}
		}
		

	 mysql_query("INSERT INTO `doc_details` ( `image`, `name`, `details`, `email`) VALUES ('$image','$name', '$mydetails',  '$myemail')");
	
				echo "<font size='6' color='#FFF' style='background-color:#4BE916'> Record Appended! </font>";


	}
?>