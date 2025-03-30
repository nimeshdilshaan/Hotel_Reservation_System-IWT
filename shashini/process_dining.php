<?php

$servername = "localhost:4306";
$username = "root";
$password = "";
$dbname = "Hotel_reservation_system"; 

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['save_dining'])) {
    $id = $_POST['dining_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    if (!empty($id)) {
       
        $sql = "UPDATE dining SET title='$title', description='$description' WHERE id='$id'";
    } else {
        
        $sql = "INSERT INTO dining (title, description) VALUES ('$title', '$description')";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Dining option saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: manageDining.php"); 
    exit();
}


if (isset($_POST['delete_dining'])) {
    $id = $_POST['dining_id'];

    $sql = "DELETE FROM dining WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Dining option deleted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    header("Location: manageDining.php"); 
    exit();
}

$conn->close();
?>
