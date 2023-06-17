// declaring const variables using button id's:


const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
const button3 = document.getElementById("button3");

// event listener for click event
button1.addEventListener("click", function() {
  
    // Redirect to another page
  window.location.href = "Donation.php";
});

button2.addEventListener("click", function() {
  
    
  window.location.href = "#";
});

button3.addEventListener("click", function() {
  
    
  window.location.href = "Sponsorship.php";
});