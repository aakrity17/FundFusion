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
</head>
<body>
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
 <button type="submit">Continue</button>
</form>

    
</body>
</html>


