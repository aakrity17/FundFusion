
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
<html>
<head>     
    <script src="https://khalti.s3.ap-south-1.amazonaws.com/KPG/dist/2020.12.17.0.0.0/khalti-checkout.iffe.js">
    </script>
    <style>
            button {
                background-color: #5c2d91;
                color: #fff;
            }
            .text-center{
                text-align: center;
            }
            img{
            height :20rem;
            weight :20rem;
                        
            display: block;
            margin-left: auto;
            margin-right: auto;
            margin-top:4rem;
            
           }
           p{
            font-size : 25px;
            text-align :center;
            color : blue;
        }
    </style>
</head>
<body>
    <div class = "button">
        <img src ="../img/blueticl.png">
        <p>Confirm your payment</P>
        <!-- Place this where you need payment button -->
        <div class="text-center">
            <button id="payment-button">Pay with Khalti</button>
        <!-- Place this where you need payment button -->
        <!-- Paste this code anywhere in you body tag -->
        </div>
    </div>
    <script>
        var config = {
            // replace the publicKey with yours
            "publicKey": "test_public_key_dc74e0fd57cb46cd93832aee0a390234",
            "productIdentity": "1234567890",
            "productName": "Dragon",
            "productUrl": "http://gameofthrones.wikia.com/wiki/Dragons",
            "paymentPreference": [
                "KHALTI",
                "EBANKING",
                "MOBILE_BANKING",
                "CONNECT_IPS",
                "SCT",
                ],
            "eventHandler": {
                onSuccess (payload) {
                    // hit merchant api for initiating verfication
                    console.log(payload);
                },
                onError (error) {
                    console.log(error);
                },
                onClose () {
                    console.log('widget is closing');
                }
            }
        };

        var checkout = new KhaltiCheckout(config);
        var btn = document.getElementById("payment-button");
        btn.onclick = function () {
            // minimum transaction amount must be 10, i.e 1000 in paisa.
            checkout.show({amount:<?php if (isset($_POST['Amount'])){
    $amount=$_POST['Amount']*100;
    echo $amount;}
    else echo 100000;?>});
        }
    </script>
    <!-- Paste this code anywhere in you body tag -->
    ...
</body>
</html>