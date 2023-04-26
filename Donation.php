<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Donations Page</title>
	<link rel="stylesheet" href="Donation.css">
	<script src="Donation.js"></script>
</head>
<body>
    <h1>Donation page hai</h1>
    <h2>Developer--Uzumaki Xatey</h2>
    <br><br><br>
	

	<nav>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="Event.php">Events</a></li>
			<li><a href="donation.php">Donations</a></li>
			<li><a href="dashboard.php">Dashboard</a></li>
		</ul>
	</nav>
    <header>
		<h1>Donations Page</h1>
	</header>

	<main>
		<section>
			<h2>Make a Donation</h2>
			<form action="donate.php" method="post">
                <label for="name">Name:</label>
				<input type="text" name="name" id="name" required>
				<label for="email">Email:</label>
				<input type="email" name="email" id="email" required>
				<label for="esewa">Esewa ID:</label>
				<input type="number" name="esewa" id="Esewa" required>
				<label for="amount">Amount:</label>
				<input type="number" name="amount" id="amount" required>
				<input type="submit" value="Donate">
			</form>
		</section>
	</main>

	<footer>
		<p><center>FundFusion &copy; 2023</center> </p>
	</footer>
</body>
</html>
