<?php
include_once'config.php';
?>

<?php
$name=$_POST["field1"];
$email=$_POST["field2"];
$check_in=$_POST["field3"];
$check_out=$_POST["field4"];
$offers=$_POST["field5"];

$sql="INSERT INTO book(Book_id,Book_name,email,check_in,check_out,offers)
           VALUES('','$name','$email','$check_in','$check_out','$offers')";

if(mysqli_query($conn,$sql)){
    echo"<script>alert('Record Inserted Successfully!!')</script>";
    header("Location:index.php");
}else{
    echo"<script>alert('Error in Insertion!!')</script>";
}


mysqli_close($conn);

?>
