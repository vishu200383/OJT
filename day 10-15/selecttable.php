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

// Variables to be inserted into the table
$name = "Vishal";
$destination = "Russia";

// Sql query to be executed
$sql = "SELECT sno, dest FROM phptrip";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["dest"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
