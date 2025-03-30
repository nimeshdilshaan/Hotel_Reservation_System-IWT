

  document.addEventListener("DOMContentLoaded", function () 
    {
        const profileImageInput = document.getElementById("profileImageInput");
        const profileImagePreview = document.getElementById("profileImagePreview");

        
        profileImageInput.addEventListener("change", function (event) 
        {
            const file = event.target.files[0];
            if (file) 
            {
                const reader = new FileReader();

                    reader.onload = function (e)
                    {
                       
                        profileImagePreview.src = e.target.result;
                    };

                    reader.readAsDataURL(file);
            } 

            else
            {
                  
                  profileImagePreview.src = "image/icon/user png.png"; // Default image path
            
            }

        });
 const editProfileForm = document.getElementById("editProfileForm");
    
    editProfileForm.addEventListener("submit", function(event) {
      
        const fullName = document.getElementById("fullName").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();

        
        if (fullName === "" || email === "" || phone === "") 
        {
            alert("Please fill in all fields.");
            event.preventDefault();
            return false;
        }

        alert("Form submitted successfully!");
    });
     
  });

