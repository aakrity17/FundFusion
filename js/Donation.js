window.addEventListener('DOMContentLoaded', function() {
  var donationCards = document.querySelectorAll('.card');
  var maxHeight = 0;

  // Find the maximum height among all donation cards
  donationCards.forEach(function(card) {
    var cardHeight = card.offsetHeight;
    if (cardHeight > maxHeight) {
      maxHeight = cardHeight;
    }
  });

  // Set the maximum height for all donation cards
  donationCards.forEach(function(card) {
    card.style.height = maxHeight + 'px';
  });
});

document.addEventListener('DOMContentLoaded', function() {
  var readMoreButtons = document.querySelectorAll('.read-more-btn');

  readMoreButtons.forEach(function(button) {
    button.addEventListener('click', function() {
      var cardBody = this.parentNode;
      var description = cardBody.querySelector('.card-description');

      if (description.classList.contains('expanded')) {
        description.classList.remove('expanded');
        this.textContent = 'Read More';
      } else {
        description.classList.add('expanded');
        this.textContent = 'Read Less';
      }
    });
  });
});

// JavaScript code for dropdown menu
document.addEventListener("DOMContentLoaded", function() {
  // Get all dropdown toggles
  var dropdownToggleList = Array.from(document.querySelectorAll('.navbar .dropdown-toggle'));

  // Add click event listener to each dropdown toggle
  dropdownToggleList.forEach(function(dropdownToggle) {
    dropdownToggle.addEventListener('click', function() {
      // Toggle the 'show' class on the parent dropdown
      var dropdown = this.closest('.dropdown');
      dropdown.classList.toggle('show');

      // Close other open dropdowns
      var openDropdowns = document.querySelectorAll('.navbar .dropdown.show');
      openDropdowns.forEach(function(openDropdown) {
        if (openDropdown !== dropdown) {
          openDropdown.classList.remove('show');
        }
      });
    });
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
    var target = event.target;
    if (!target.closest('.navbar .dropdown')) {
      var openDropdowns = document.querySelectorAll('.navbar .dropdown.show');
      openDropdowns.forEach(function(openDropdown) {
        openDropdown.classList.remove('show');
      });
    }
  });
});










