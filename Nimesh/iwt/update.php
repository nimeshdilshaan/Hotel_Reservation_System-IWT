<?php

require 'connection.php';



if (isset($_POST["username"])) {
    $fname = $_POST["username"];

    $sql4 = "SELECT MAX(id) AS max_id FROM users";
    $result = $conn->query($sql4);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $max_id = $row['max_id'];

        $sql3 = "UPDATE users SET first_name='$fname' WHERE id='$max_id'";
        if ($conn->query($sql3) === TRUE) {
            echo "<script>alert('Record updated successfully')</script>";
            echo "<script>window.location.href = 'userprofile2.php';</script>"; /*----Index 1 >>> update >>>userprofile2 >>>>*/
        } else {
            echo "<script>alert('Error updating record: ')</script>" . $conn->error;
        }
    } else {
        echo "<script>alert('No records found')</script>";
    }
} else {
    echo "<script>alert('No data submitted.')</script>";
}

$conn->close();
?>