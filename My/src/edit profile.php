<?php
include 'db connection.php'; 


/

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $profileImage = $_FILES['profileImage']; 
    

    $errors = [];

 
    
    if (empty($fullName) || empty($email) || empty($phone)) 
    {
        $errors[] = "All fields are required.";
    }

  
    
    $profileImagePath = null;
    if (!empty($profileImage['name'])) 
    {
       
        
        $targetDir = "uploads/profile_images/";
        $targetFile = $targetDir . basename($profileImage["name"]);
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

       
        
        $allowedFileTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedFileTypes)) 
        {
            $errors[] = "Only JPG, JPEG, PNG & GIF files are allowed.";
        }

       
        
        if ($profileImage["size"] > 2000000) 
        {
            $errors[] = "File size should not exceed 2MB.";
        }

       
        
        if (empty($errors)) 
        {
            $uniqueFileName = uniqid() . '.' . $imageFileType;
            $uploadPath = $targetDir . $uniqueFileName;

            if (!move_uploaded_file($profileImage["tmp_name"], $uploadPath)) 
            {
                $errors[] = "Sorry, there was an error uploading your file.";
            } 
            else 
            {
                $profileImagePath = $uploadPath; 
                
            }
        }
    }


    
    if (empty($errors)) 
    {
       
        
        $sql = "UPDATE users SET full_name = ?, email = ?, phone = ?";
        if ($profileImagePath) 
        {
            $sql .= ", profile_image = ?"; 
            
        }
        $sql .= " WHERE id = ?"; 
        

        
        
        session_start();
        $userId = $_SESSION['id'];

        
        
        if ($stmt = $conn->prepare($sql)) 
        {
            if ($profileImagePath) 
            {
                $stmt->bind_param("ssssi", $fullName, $email, $phone, $profileImagePath, $userId);
            } 
            else 
            {
                $stmt->bind_param("sssi", $fullName, $email, $phone, $userId);
            }

            
            
            if ($stmt->execute()) 
            {
                echo json_encode(["success" => true]);
            } 
            else 
            {
                echo json_encode(["success" => false, "error" => "Database update failed."]);
            }

            $stmt->close();
        }
    } 
    else 
    {
        
        
        echo json_encode(["success" => false, "error" => implode(", ", $errors)]);
    }

    $conn->close();
} 
else 
{
    
    
    echo json_encode(["success" => false, "error" => "Invalid request."]);
}
?>
