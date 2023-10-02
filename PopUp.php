<?php
// Replace 'your_database_host', 'your_database_name', 'your_username', and 'your_password'
$conn = new mysqli('localhost', 'root', '', 'db_connect');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    //$name = $_POST['name'];
    //$status = $_POST['submit'];
    $status = 'present';

    // Prepare and execute the SQL query
    $stmt = $conn->prepare("INSERT INTO tbl_popup(status) VALUES (?)");
    $stmt->bind_param("s", $status);
    $stmt->execute();

    echo "Attendance marked as " . $status;

    // Close the connection
    //$stmt->close();
} else{
    $status = 'absent';
    $stmt = $conn->prepare("INSERT INTO tbl_popup(status) VALUES (?)");
    $stmt->bind_param("s", $status);
    $stmt->execute();

    echo "Attendance marked as " . $status;

    // Close the connection
    $stmt->close();

}
$conn->close();
?>