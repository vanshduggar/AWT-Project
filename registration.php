<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Student Registration</title>
</head>
<body>
    <form action="registration1.php" method="post">
    <?php
    include('mitlogo.php');
    ?>
      <br>  <h1 align="center">Student Registration For Eligiblity Form MIT-WPU</h1> 
        <table border="1" cellspacing="0" cellpadding="10" align="center" class="table table-bordered">
            <tr>
                <td class="form-control" >Student Name:</td>
                <td><input type="text" name="stname" class="form-control" required></td>
            </tr>

            <tr>
                <td class="form-control">E-Mail ID</td>
                <td><input type="email" name="emailid" class="form-control" required></td>
            </tr>

            <tr>
                <td class="form-control">Mobile Number:</td>
                <td><input type="text" maxlength="10" name="mobileno" class="form-control" required></td>
            </tr>

            <tr>
                <td class="form-control">Degree Level</td>
                <td><select name="degreelevel" id="" class="form-control" required>
                    <option value="">Choose</option>
                    <option value="UG">UG</option>
                    <option value="PG">PG</option>
                    <option value="Diploma">DIPLOMA</option>
                </select></td>
            </tr>

            <tr>
                <td class="form-control">Mother Name: (Only First Name:)</td>
                <td><input type="text" placeholder="Only First Name" name="mothername" class="form-control" required></td>
            </tr>

            <tr>
                <td colspan="2" align="center" >
                <button><input type="submit" name="submit" value="Register" class="form-control"></button>    
                </td>
            </tr>


        </table>
    </form>
</body>
</html>