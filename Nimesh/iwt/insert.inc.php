<?php


require_once "connection.php";

if ($_SERVER["REQUEST_METHOD"]) {
    $f_name = $_POST["f_name"];
    $l_name = $_POST["l_name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $country = $_POST["country"];
    $address = $_POST["address"];
    $pwd = $_POST["pwd"];


    $sql = "INSERT INTO users(first_name,last_name,phone,email,country,address,password)
    VALUES('$f_name','$l_name','$phone','$email','$country','$address','$pwd')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Data Added Succcessfully')</script>";
        echo "<script>window.location.href='./userprofile.php'</script>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
