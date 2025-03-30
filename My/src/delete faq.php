<?php
include 'db connection.php'; 


$id = $_GET['id'];


$sql = "DELETE FROM faqs WHERE id = ?";
$stmt = $conn->prepare($sql);


$stmt->bind_param("i", $id);


if ($stmt->execute()) 
{
   
    header("Location: manage_faqs.php?success=FAQ deleted successfully");
} 

else 
{
    
    header("Location: manage_faqs.php?error=Failed to delete FAQ");
}


$stmt->close();
$conn->close();
?>
