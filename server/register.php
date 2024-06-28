<?php
$servername="localhost";
$username="root";
$password="";
$db="register_db";

$conn=mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name=$_POST['name'];
$department=$_POST['department'];
$year=$_POST['year'];
$topic=$_POST['topic'];

$sql="INSERT INTO register(name,department,year,topic) VALUES ('$name', '$department', '$year', '$topic')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
