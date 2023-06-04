<?php
include "../sessioncheck.php";
include "../../database/Db_Connection.php";

$res = mysqli_query($conn, "SELECT * FROM donation WHERE id ='" . $_GET["id"] . "'");
if($row=mysqli_fetch_array($res)){
    $deleteimage = $row['donation_image_url'];
}
$folder="../../img/donation/";
unlink($folder.$deleteimage);
$sql = "DELETE FROM donation WHERE id='" . $_GET["id"] . "'";

$result = mysqli_query($conn,$sql);
header('Location: '. $site_url .'admin/donation/create-donation.php?statu=success');

?>