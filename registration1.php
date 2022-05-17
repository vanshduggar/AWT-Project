<?php

include("db.php");

$stname=$_POST["stname"];
$emailid=$_POST["emailid"];
$mobileno=$_POST["mobileno"];
$degreelevel=$_POST["degreelevel"];
$mothername=$_POST["mothername"];

$r=mysqli_query($con,"insert into registration(studentname,email,mobileno,degreelevel,mothername)values('$stname','$emailid','$mobileno','$degreelevel','$mothername')");

if($r)
{
   header("location:index.php");
}
else
{
    echo mysqli_error($con);
}

?>