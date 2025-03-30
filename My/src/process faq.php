<?php

include 'db connection.php';

if (isset($_POST['add_faq'])) 
{
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    $sql = "INSERT INTO faqs (question, answer) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $question, $answer);

    if ($stmt->execute()) 
    {
        header("Location: manage_faqs.php?success=FAQ added successfully");
    } 

    else 
    {
        header("Location: manage_faqs.php?error=Failed to add FAQ");
    }

    $stmt->close();
    $conn->close();
}
?>

