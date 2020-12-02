<?php   
$servername = "localhost";  //replace your servername
$username = "radius";   //replace your username
$password = "radpass";        //replace your password
$dbname = "test1";    //replace your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    echo ' not connected';
}
else
    echo 'connected';
?>