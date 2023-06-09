<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "my_portifolio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name);

// Check connection
if (!$conn) {
  die("Connection failed: " . $conn);
}
echo "Connected successfully";
echo "<br>";
$Name =  $_REQUEST['Name'];
$Email = $_REQUEST['Email'];
$phoneNumber = $_REQUEST['phoneNumber'];
$Message = $_REQUEST['Message'];
 
// Performing insert query execution
// here our table name is contacts
$sql = "INSERT INTO contacts  VALUES ('$Name','$Email','$phoneNumber','$Message')";
 
if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
?>