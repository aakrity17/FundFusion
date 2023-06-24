<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <h1 style="text-align:center; padding:50px;">Our Donors</h1>
        <div class="col-md-12 mb-3" style="text-align: right;">
            <label for="filter">Filter By:</label>
            <select id="filter" class="form-select-sm my-4" onchange="filterDonors(this.value)">
                <option value="all">All</option>
                <option value="amount">Amount</option>
                <option value="date">Date</option>
            </select>
        </div>

        <?php
        include '../database/Db_Connection.php';

        // Retrieve the user data from the database
        $sql = "SELECT * FROM donors";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/member2.jpg" class="img-fluid rounded-start" alt="Donor Image" style="padding-top:50px;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                                    <p class="card-text">Address: <?php echo $row["address"]; ?></p>
                                    <p class="card-text">Amount: <?php echo $row["amount"]; ?></p>
                                    <p class="card-text">Cause <?php echo $row["cause"]; ?></p>
                                    <p class="card-text"><small class="text-muted">Date: <?php echo $row["date"]; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo "<p>No donors found</p>";
        }
        ?>
    </div>
</div>

<script>
  function filterDonors(value) {
    var cards = document.getElementsByClassName("card");

    for (var i = 0; i < cards.length; i++) {
        cards[i].style.display = "block";
    }

    if (value === "amount") {
        for (var i = 0; i < cards.length; i++) {
            var amountText = cards[i].querySelector(".card-text:nth-of-type(3)").textContent;
            var amount = parseInt(amountText.split(":")[1].trim());
            if (amount > 100) {
                cards[i].style.display = "none";
            }
        }

        // Convert the HTMLCollection to an array for sorting
        var cardsArray = Array.from(cards);

        // Sort the cards based on the amount in ascending order
        cardsArray.sort(function(a, b) {
            var amountTextA = a.querySelector(".card-text:nth-of-type(3)").textContent;
            var amountA = parseInt(amountTextA.split(":")[1].trim());

            var amountTextB = b.querySelector(".card-text:nth-of-type(3)").textContent;
            var amountB = parseInt(amountTextB.split(":")[1].trim());

            return amountA - amountB;
        });

        // Clear the existing display
        for (var i = 0; i < cards.length; i++) {
            cards[i].style.display = "none";
        }

        // Display the sorted cards
        for (var i = 0; i < cardsArray.length; i++) {
            cardsArray[i].style.display = "block";
        }
    } else if (value === "date") {
        for (var i = 0; i < cards.length; i++) {
            var dateText = cards[i].querySelector(".card-text small").textContent;
            if (!dateText.includes("mins ago")) {
                cards[i].style.display = "flex";
            }
        }
    }
}


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
