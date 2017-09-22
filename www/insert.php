<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
header("Access-Control-Allow-Origin: *");
$link = mysqli_connect("mysql.hostinger.in", "u408232909_ssi", "ssi@123", "u408232909_ssi");
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$city_name = mysqli_real_escape_string($link, $_REQUEST['city_name']);
 
// attempt insert query execution
$sql = "INSERT INTO city (cityname) VALUES ('$city_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.
			<script type=\"text/javascript\">
				window.close();
            </script>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>