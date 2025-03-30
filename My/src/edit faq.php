<?php
require 'db connection.php'; 


$id = isset($_GET['id']) ? intval($_GET['id']) : 0;


if ($id <= 0) 
{
    header("Location: manage_faqs.php?error=Invalid FAQ ID");
    exit;
}


$sql = "SELECT * FROM faqs WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) 
{
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$faq = $result->fetch_assoc();

if (!$faq) 
{
    header("Location: manage_faqs.php?error=FAQ not found");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $question = trim($_POST['question']);
    $answer = trim($_POST['answer']);

   
    if (empty($question) || empty($answer)) 
    {
        header("Location: manage_faqs.php?error=Question and answer cannot be empty");
        exit;
    }

  
    $update_sql = "UPDATE faqs SET question = ?, answer = ? WHERE id = ?";
    $update_stmt = $conn->prepare($update_sql);

    if (!$update_stmt) 
    {
        die("Error preparing update statement: " . $conn->error);
    }

    $update_stmt->bind_param("ssi", $question, $answer, $id);

    if ($update_stmt->execute()) 
    {
        header("Location: manage_faqs.php?success=FAQ updated successfully");
    } else 
    {
        header("Location: manage_faqs.php?error=Failed to update FAQ");
    }
}

?>


    <title>Edit FAQ</title>
</head>
<body>
    <h2>Edit FAQ</h2>
    <form method="POST" action="">
        <label for="question">Question:</label><br>
        <input type="text" id="question" name="question" value="<?php echo htmlspecialchars($faq['question']); ?>" required><br><br>

        <label for="answer">Answer:</label><br>
        <textarea id="answer" name="answer" rows="4" required><?php echo htmlspecialchars($faq['answer']); ?></textarea><br><br>

        <input type="submit" value="Update FAQ">
    </form>
</body>
</html>
