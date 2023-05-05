
<?php
// Here is the connection of database take place.
include('settings.php');
$link = mysqli_connect("$host", "$username", "$password", "$dbname");
	if(mysqli_connect_error()){
	    die("ERROR: Unable to connect:" .mysqli_connect_error()); 
    }
	//echo "Connected Successfully!";
	//mysql_close($link);
?>