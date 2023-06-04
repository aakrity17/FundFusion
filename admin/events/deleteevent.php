<?php
include "../sessioncheck.php";
include "../../database/Db_Connection.php";


$res=mysqli_query($conn,"SELECT* from events WHERE id='" . $_GET["id"] . "'");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['event_image_url']; 
}
$folder="../../img/events/";
unlink($folder.$deleteimage);
$sql = "DELETE FROM events WHERE id='" . $_GET["id"] . "'";

$result = mysqli_query($conn,$sql);
header('Location: '. $site_url .'admin/events/create-event.php?statu=success');

?>