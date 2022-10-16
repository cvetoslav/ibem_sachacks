<?php
session_start();
require 'conn.php';

if(isset($_POST["login"])){
    $email=$_POST["email"];
    $pass=$_POST["pass"];
        $email = mysqli_real_escape_string($conn, $email);
        $pass = mysqli_real_escape_string($conn, $pass);

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        if($pass == $row['pass'])
        {
            echo "Logged in";
            $_SESSION["name"] = $row['name'];
        } 
        else {
            echo "Incorrect";
        }
      }
    } else {
      echo "0 results";
    }
    $conn->close();  
}

?>