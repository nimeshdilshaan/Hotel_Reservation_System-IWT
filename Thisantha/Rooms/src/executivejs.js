
    var modal12 = document.getElementById("myModal12");

    
    var btn12 = document.getElementById("openroomd12");
  
    
    var span12 = document.getElementsByClassName("close")[0];
  
    
    btn12.onclick = function() {
      modal12.style.display = "block";
    }
  
    
    span12.onclick = function() {
      modal12.style.display = "none";
    }
  
    
    window.onclick = function(event) {
      if (event.target == modal12) {
        modal12.style.display = "none";
      }
    }

    var modal13 = document.getElementById("myModal13");

    
    var btn13 = document.getElementById("openroomd13");
  
    
    var span13 = document.getElementsByClassName("close")[1];
  
  
    btn13.onclick = function() {
      modal13.style.display = "block";
    }
  
    
    span13.onclick = function() {
      modal13.style.display = "none";
    }
  
    
    window.onclick = function(event) {
      if (event.target == modal13) {
        modal13.style.display = "none";
      }
    }
