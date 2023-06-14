<?php
include "../sessioncheck.php";
include "../../database/Db_Connection.php";


$res=mysqli_query($conn,"SELECT* from projects WHERE id='" . $_GET["id"] . "'");
if($row=mysqli_fetch_array($res)) 
{
$deleteimage=$row['thumbnail']; 
}
$folder="../../img/projects/";
unlink($folder.$deleteimage);
$sql = "DELETE FROM projects WHERE id='" . $_GET["id"] . "'";

$result = mysqli_query($conn,$sql);
header('Location: '. $site_url .'admin/projects/create-project.php?statu=success');

?>