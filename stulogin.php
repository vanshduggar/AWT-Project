<?php
session_start();
include("db.php");

$email=$_POST["email"];
$mobileno=$_POST["mobileno"];
$password=$_POST["password"];

$r=mysqli_query($con,"select * from registration where email='$email' and mobileno='$mobileno' and mothername='$password'");

if($row=mysqli_fetch_array($r))
{
  $check=mysqli_query($con,"select degreelevel from registration where email='$email' and mobileno='$mobileno' and mothername='$password'");

        if($row1=mysqli_fetch_array($check))
        {
            if($row1[0]=="UG" || $row1[0]=="DIPLOMA")
        {
            $log=mysqli_query($con,"select * from ug where email='$email' and studentmobileno='$mobileno'");

            if($row2=mysqli_fetch_array($log))
            {
                header("location:ugprofile.php?b=$row2[0]");
            }
            else
            {
            header("location:ug.php?email=$email&mobileno=$mobileno");
        }
        }
        else
        {
            $log=mysqli_query($con,"select * from pg where email='$email' and studentmobileno='$mobileno'");

            if($row2=mysqli_fetch_array($log))
            {
                header("location:pgprofile.php?b=$row2[0]");
            }
            else
            {
                header("location:pg.php?email=$email&mobileno=$mobileno");
        }
            
        }
        }
    

  
}
else
{ 
    $_SESSION["errlogin"]="Invalid UserName And Password";
    header("location:index.php");
}

?>