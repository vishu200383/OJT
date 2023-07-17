<?php

// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbVishal";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}




// Sql query to be executed
$sql = "DELETE FROM phptrip WHERE sno=3";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>
