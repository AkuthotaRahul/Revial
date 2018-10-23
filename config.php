<?php
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "revival";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password);
if (!$bd)
{
die("Opps some thing went wrong 1");
}
else
{
 echo("");
}
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong 2 ");
//echo("count is one 1");
?>
