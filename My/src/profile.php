<?php

include 'db connection.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    
    $userId = $_POST['admin_id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

   
    $profileImagePath = null;

   
    if (isset($_FILES['profileImage']) && $_FILES['profileImage']['error'] == 0) 
    {
        
        $targetDir = "uploads/profile_images/"; 
        $targetFile = $targetDir . basename($_FILES['profileImage']['name']);
        
        
        if (move_uploaded_file($_FILES['profileImage']['tmp_name'], $targetFile)) 
        {
            $profileImagePath = $targetFile; 
        } 
        
        else 
        {
            echo "Sorry, there was an error uploading your file.";
            exit;
        }
    }

    else 
    {
        
        if ($userId > 0) 
        {
            $query = "SELECT profile_image FROM admin WHERE id = ?";
            $stmt = $conn->prepare($query);
            $stmt->bind_param("i", $userId);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) 
            {
                $row = $result->fetch_assoc();
                $profileImagePath = $row['profile_image']; 
            }

        }

    }

   
    if (!empty($userId) && is_numeric($userId)) 
    {
       
        $sql = "UPDATE admin SET full_name=?, email=?, phone=?, profile_image=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $fullName, $email, $phone, $profileImagePath, $userId);
    } 
    else 
    {
       
        $sql = "INSERT INTO admin (full_name, email, phone, profile_image) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $fullName, $email, $phone, $profileImagePath);
    }

  
    if ($stmt->execute()) 
    {
        echo "Profile updated successfully.";
        header("Location:admin profile.php"); 
        exit;
    } 
    
    else 
    {
        echo "Error updating profile: " . $stmt->error;
    }

  
    $stmt->close();
    $conn->close();
}
?>
