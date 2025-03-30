<?php

require_once "connection.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $email = $_POST["mail"];
    $pwd = $_POST["pwd"];

   
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $pwd);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) 
    {
        echo "<script>alert('User login successful')</script>";
        echo "<script>window.location.href = 'userprofile2.php';</script>";
    } 
    else 
    {
        echo "<script>alert('Invalid Email or Password')</script>";
        echo "<script>window.location.href = 'sign in.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>