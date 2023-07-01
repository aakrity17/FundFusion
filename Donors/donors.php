<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
		integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <h1 style="text-align:center; padding:50px;">Our Donors</h1>
        <div class="col-md-12 mb-3" style="text-align: right;">
            <label for="filter">Sort By:</label>
            <select id="filter" class="form-select-sm my-4" name="sortDonorsList">
                <option>Select Option</option>
                <option value="amount">Amount</option>
                <option value="date">Date</option>
            </select>
        </div>
        <div id="unsortedItemList" class="row">
                <?php
                include '../database/Db_Connection.php';

                // Retrieve the user data from the database
                $sql = "SELECT * FROM donors";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <div class="dataCardModule col-md-4" data-day="<?php echo $row['date']; ?>" data-amount="<?php echo $row['amount']; ?>">
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
    </div>
</div>
<script>
		$(document).ready(function () {
				$('[name="sortDonorsList"]').change(function () {
					if($('[name="sortDonorsList"]').val() == "amount"){
						var cardData = $(this).parents().find('div.dataCardModule');
                        cardData.sort(function (a, b) {
                            return b.dataset.amount - a.dataset.amount
                        })
                        $('#unsortedItemList').html(cardData);
					}
					if($('[name="sortDonorsList"]').val() == "date"){
						var cardData = $(this).parents().find('div.dataCardModule');
                        cardData.sort(function (a, b) {
                            return new Date($(a).data("day")) - new Date($(b).data("day"));
                        })
                        $('#unsortedItemList').html(cardData);
					}
				});
			});
</script>
</body>
</html>
