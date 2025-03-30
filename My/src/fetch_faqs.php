<?php



include 'db connection.php';


$sql = "SELECT * FROM faqs ORDER BY id ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    
    while ($row = $result->fetch_assoc()) 
    {
        echo '<div class="faq-item">';
        echo '<div class="faq-question">' . $row['question'] . '</div>';
        echo '<div class="faq-answer"><p>' . $row['answer'] . '</p></div>';
        echo '</div>';
    }

} 

else 
{
    echo '<p>No FAQs available at the moment.</p>';
}


$conn->close();
?>
