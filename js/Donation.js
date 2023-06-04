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









