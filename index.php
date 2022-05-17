<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Student Login</title>
</head>
<body>
   
    <form action="stulogin.php" method="post">
    <?php
    include('mitlogo.php');
    ?>
         <br> <h1 align="center"> Login To Fill Eligiblity Form of MIT-WPU</h1> <br>
        <table border="1" cellspacing="0" cellpadding="10" align="center" class="table table-bordered">
            <tr>
                <td colspan="2" align="center"><span style="color: red;">
            <?php
            if(isset($_SESSION["errlogin"]))
            {
                echo $_SESSION["errlogin"];
            }
            ?>
        </span></td>
            </tr>
            <tr>
                <td colspan="2" align="center"> <b>Login</b> </td>
            </tr>

            <tr>
                <td class="form-control">E-mail:</td>
                <td><input type="email" name="email" class="form-control" required></td>
            </tr>

            <tr>
                <td class="form-control">Mobile No.</td>
                <td><input type="text" placeholder="Registerd Mobile No." maxlength="10" name="mobileno" required class="form-control"></td>
            </tr>

            <tr>
                <td class="form-control">Password:</td>
                <td><input type="password" name="password" placeholder="Mother First Name" required class="form-control"></td>
            </tr>
            
            <tr>
                <td align="center" colspan="2">
                   <button> <input type="submit" value="Login" class="form-control" required></button><br><br> <button> <a href="registration.php" style="text-decoration: none;"> Register</a></button></td>
                
            </tr>
        </table>
    </form>
    
</body>
</html>
<?php
   $_SESSION["errlogin"]="";  
?>