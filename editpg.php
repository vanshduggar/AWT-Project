<?php
include('db.php');
$id=$_REQUEST["a"];

$r=mysqli_query($con,"update pg set status='11' where id='$id'");

if($r)
{
   header("location:pgprofile.php?b=$id");
}
?>