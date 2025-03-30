<?php

          include 'db connection.php';
          
          $sql = "SELECT * FROM faqs ORDER BY id ASC";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) 
          {
              while ($row = $result->fetch_assoc()) 
              {
                  echo "<tr>";
                  echo "<td>" . $row['question'] . "</td>";
                  echo "<td>" . $row['answer'] . "</td>";
                  echo "<td>";
                  echo '<a href="edit faq.php?id=' . $row['id'] . '">Edit</a> | ';
                  echo '<a href="delete faq.php?id=' . $row['id'] . '" onclick="return confirm(\'Are you sure?\')">Delete</a>';
                  echo "</td>";
                  echo "</tr>";
              }
          } 
          
          else
          {
              echo "<tr><td colspan='3'>No FAQs available.</td></tr>";
          }

          $conn->close();

        ?>

