<?php
session_start();
require 'conn.php';

if(isset($_POST["register"]))
{
	$uname = $_POST["uname"];
    $uemail = $_POST["uemail"];
    $upass = $_POST["upass"];

    $sql = "INSERT INTO users (name, email, pass, iscon)
    VALUES ('$uname', '$uemail', '$upass', 0)";

    if ($conn->query($sql) === TRUE) {
    $_SESSION['name'] = $uname;
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

?>