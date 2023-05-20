// Ensure the form is submitted properly
document.querySelector('form').addEventListener('submit', function(e) {
	e.preventDefault();
	
	// Get the form data
	let name = document.querySelector('#name').value;
	let email = document.querySelector('#email').value;
	let esewa = document.querySelector('#Esewa').value;
	let amount = document.querySelector('#amount').value;
	
	// TODO: Perform validation on the form data here
	
	// Submit the form data to the server using AJAX
	let xhr = new XMLHttpRequest();
	xhr.open('POST', 'donation.php', true);
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		if (xhr.status === 200) {
			// Success message
			alert('Thank you for your donation!');
		} else {
			// Error message
			alert('Something went wrong. Please try again later.');
		}
	};
	xhr.send('&name=' + name + '&email=' + email + 'amount=' + amount +  '&Esewa=' + esewa);
});
