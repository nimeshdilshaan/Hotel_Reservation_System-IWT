<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="icon" type="image/jpeg" href="image/logo/image-removebg-preview2_0.33x.ico">
    <title>Famous5 | Manage FAQ</title>
</head>


<header>


    <div class="main">

        

    <div class="line1">

        
            <label for="language">Language</label>
            <select id="language" name="language" class="dropdown">
              <option value="en">English</option>
              <option value="es">Español</option>
              <option value="fr">Français</option>
              <option value="de">Deutsch</option>
              <option value="zh">中國人</option>
              <option value="jp">日本語</option>
            </select>
        
            <script>

              document.getElementById("language").addEventListener("change", function() 
                  {
                      let selectedLang = this.value;
                      alert("Language changed to: " + selectedLang);
                  });
            </script>


       


        
    </div>


        <div class="logo">
            <img src="image/logo/image-removebg-preview.png" alt="logo" width="250" height="200" >
        </div>

      
   
    </div>
</header>


<body>

  


<div class="faqpart">

  <h2>Manage FAQs</h2>

</div>

<div class="faq-admin-container">

  <h2>Add New FAQ</h2>

  <form action="process faq.php" method="POST">

      <label for="question">Question:</label>
      <input type="text" name="question" id="question" required>

      <label for="answer">Answer:</label>
      <textarea name="answer" id="answer" rows="4" required></textarea>

      <button type="submit" name="add_faq">Add FAQ</button>

  </form>

  <h2>Existing FAQs</h2>

  <table>

      <thead>

          <tr>
              <th>Question</th>
              <th>Answer</th>
              <th>Actions</th>
          </tr>

      </thead>

      <tbody>

      <?php 

        include("manage_faqs.php"); 

      ?> 

   

      </tbody>

  </table>

</div>






</body>



    
    <footer>
      
      
      
        <div class="footer-bottom">
          <p>©2024 Famous5. All rights reserved.</p>
        </div>

      </footer>
      



</html>