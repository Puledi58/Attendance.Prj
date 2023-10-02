<?php
// Establish a database connection
//$host = "localhost";
//$username = "root";
//$password = "";
//$database = "attendance_db";

$conn = new mysqli ('localhost','root','','attendance_db');
function dba(){
    $conn=new mysqli ('localhost','root','','attendance_db');
    return $conn;
}
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Retrieve form data
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$Email=$_POST['Email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$course=$_POST['course'];

// Insert data into the database
$sql = "INSERT INTO attendance_tb(id,firstname, lastname, Email, password,gender,course) VALUES ('0','$firstname', '$lastname', '$Email','$password','$gender','$course')";

if ($conn->query($sql)) {
  echo "Data inserted successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->error;
?>