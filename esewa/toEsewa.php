
<?php
include '../database/Db_Connection.php';
if (isset($_POST['Amount'])){
    $amount=$_POST['Amount'];
    echo $amount;
    $name=$_POST['name'];
    $address=$_POST['address'];
    $contact=$_POST['contact'];
    $cause=$_POST['donation_title'];
    $email=$_POST['email'];
    $status="Pending";

    // $sql="INSERT INTO donors VALUES("id",
    $sql = "INSERT INTO donors (name, address, contact, email, amount,status, cause, date) VALUES ('$name', '$address', '$contact', '$email', '$amount','$status', '$cause', CURDATE())";
      $result=mysqli_query($conn, $sql);
   if($result){
    echo "Success";
    
   }
   else{
    echo "Error: " . mysqli_error($conn);
  }

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
            
           }
           img{
            height :40vh;
            weight :40vh;
           }
           p{
            font-size : 25px;
            text-align :center;
            color : green;
           }
           
        </style>
</head>
<body>
  <div>
    <img src="../img/tick.png" >
  <p >Confirm you payment  </p>
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
</body>
</html>

    
</body>
</html>


