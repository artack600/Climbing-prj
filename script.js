document.addEventListener("DOMContentLoaded", function() {
    
    var circle = document.getElementById("loading-circle");
    
    circle.style.display = "block";
    
    setTimeout(function() {
        
        circle.style.display = "none";
    }, 500); 
});