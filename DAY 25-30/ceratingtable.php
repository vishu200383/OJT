<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "feedback";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

// Create a table in the db
$sql = "CREATE TABLE `fb_tb` ( `Fname` VARCHAR(10) NOT NULL  , `Nlast` VARCHAR(12) NOT NULL , `NO` INT(11) NOT NULL ,`E-mail` VARCHAR(30)NOT NULL , `message` TEXT(599)NOT NULL)";
$result = mysqli_query($conn, $sql);

// Check for the table creation success
if($result){
    echo "The table was created successfully!<br>";
}
else{
    echo "The table was not created successfully because of this error ---> ". mysqli_error($conn);
}
  
?>
