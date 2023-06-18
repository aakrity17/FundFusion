
<?php
if (isset($_POST['Amount'])){
    $amount=$_POST['Amount'];
    echo $amount;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
           body {
            display: flex;
            justify-content: center;
            align-items: center;
            height : 100vh;
            background-color: #A9A9A9;
           }
           
        </style>
</head>
<body>
  <div class="card" style="width: 25rem;">
  <img src="../img/Logo.png" style="background-color:#C0C0C0"alt="Fundfusion logo">
  <div class="card-body">
    <h5 class="card-title text-center">!! Thank You !!</h5>
    <p class="card-text">We really appreciate your effort and time. You will now be directed to Esewa Payment Page.</p>
    <form action="https://uat.esewa.com.np/epay/main" method="post">
        <input value="<?php echo $amount?>" name="tAmt" type="hidden">
        <input value="<?php echo $amount?>" name="amt" type="hidden">
        <input value="0" name="txAmt" type="hidden">
        <input value="0" name="psc" type="hidden">
        <input value="0" name="pdc" type="hidden">
        <input value="EPAYTEST" name="scd" type="hidden">
        <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
        <input value="http://merchant.com.np/page/esewa_payment_success?q=su" type="hidden" name="su">
        <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
        <button type="submit" class="btn btn-success col-12" >Continue</button>
    </form>
  </div> 
</div>
</body>
</html>

    
</body>
</html>


