

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
 
</head>
<body>
<?php
include('db.php');

$id=$_REQUEST['a'];

$r=mysqli_query($con,"select * from ug where id='$id'");


if($row=mysqli_fetch_array($r))
{
    if($row[63]=="12")
    {
?>
<?php
    include('mitlogo.php');
    ?>
    <br>
<div style="width:80%;margin:auto;">
     <form action="">
        <table border="1" cellspacing="1" cellpadding="10" align="center" class="table table-bordered">
        <tr>
            <td> Acadmic Year:</td>
            <td><input type="text" name="academicyear" class="form-control" value="<?php echo $row[3]; ?>" > </td>
        </tr>

        <tr>
            <td>E-mail:</td>
            <td><input type="email" name="email" class="form-control" value="<?php echo $row[1]; ?>" ></td>
        </tr>

        <tr>
            <td> PRN No. (only 10 Digit Number):</td>
            <td><input type="text" name="prnno" class="form-control" value="<?php echo $row[2]; ?>" ></td>
        </tr>

        <tr>
            <td>Degree level:</td>
            <td><input type="text" name="degreelevel" class="form-control" value="<?php echo $row[4]; ?>" ></td>
        </tr>
            
        <tr>
            <td>UG/PG Programe Course Name:</td>
            <td><input type="text" name="ugpgprogram" class="form-control" value="<?php echo $row[5]; ?>" ></td>
        </tr>

        <tr>
            <td>Name of Student as per previous Marksheet:</td>
            <td><input type="text" name="studentname" class="form-control" value="<?php echo $row[6]; ?>" ></td>
        </tr>
        
        <tr>
            <td>Mother Name (Only First Name):</td>
            <td><input type="text" name="mothername" class="form-control" value="<?php echo $row[7]; ?>" ></td>
        </tr>

        
        <tr>
            <td>Nationality:</td>
            <td><input type="text" name="nationality" class="form-control" value="<?php echo $row[8]; ?>" ></td>
        </tr>

        <tr>
            <td>If Other Then Specify your Nationality</td>
            <td><input type="text" name="othernationality" class="form-control" value="<?php echo $row[9]; ?>" ></td>
        </tr>

        <tr>
            <td>Gender:</td>
            <td><input type="text" name="gender" class="form-control" value="<?php echo $row[10]; ?>" ></td>
        </tr>

        <tr>
            <td>Domicile:</td>
            <td><input type="text" name="domicile" class="form-control" value="<?php echo $row[11]; ?>" ></td>
        </tr>

        <tr>
            <td>Date of Birth:</td>
            <td><input type="date" name="dob" class="form-control" value="<?php echo $row[12]; ?>" ></td>
        </tr>

        <tr>
            <td>Place of Birth:</td>
            <td><input type="text" name="placeofbirth" class="form-control" value="<?php echo $row[13]; ?>" ></td>
        </tr>

        <tr>
            <td>Reserve Category:</td>
            <td><input type="text" name="reservecategory" class="form-control" value="<?php echo $row[15]; ?>" ></td>
        </tr>

        <tr>
            <td>Physically Handicapped:</td>
            <td><input type="text" name="handicap" class="form-control" value="<?php echo $row[18]; ?>" ></td>
        </tr>

        <tr>
            <td>Previous Examination Details:</td>
            <td><input type="text" name="previousexam" class="form-control" value="<?php echo $row[19]; ?>" ></td>
        </tr>

        <tr>
            <td>Have you passed Exam from State Board:</td>
            <td><input type="text" name="stateboard" class="form-control" value="<?php echo $row[20]; ?>" ></td>
        </tr>

        <tr>
            <td>Specify Board:</td>
            <td><input type="text" name="boardstate" class="form-control" value="
            <?php
            if($row[21]=="")
            {
                echo $row[22];
            }
            else
            {
                echo $row[21];
            }
             
            
            ?>" ></td>
        </tr>

        <tr>
            <td>Name of School / Jr. College:</td>
            <td><input type="text" name="school" class="form-control" value="<?php echo $row[23]; ?>" ></td>
        </tr>
        <tr>
                 <td>
                     City of Jr. College/ School.
                 </td>
                 <td>
                     <input type="text" name="cityschool" class='form-control' value="<?php echo $row[24]; ?>" >
                 </td>
             </tr>
        <tr>
            <td>State of Jr. College / School:</td>
            <td><input type="text" name="statecollegeschool" class='form-control' value="<?php echo $row[25]; ?>" ></td>
        </tr>

        <tr>
            <td>HSC (12th Marksheet):</td>
            <td><input type="text" name="HSC12thmarksheet" class='form-control' value="<?php echo $row[26]; ?>" ></td>
        </tr>

        <tr>
            <td>Seat No. as per 12th Marksheet:</td>
            <td><input type="text" name="examseatno12th" class='form-control' value="<?php echo $row[27]; ?>" ></td>
        </tr>

        <tr>
            <td>12th / HSC Stream:</td>
            <td><input type="text" name="HSC12thStream" class='form-control' value="<?php echo $row[28]; ?>" ></td>
        </tr>

        <tr>
            <td>Month & Year Of Passing:</td>
            <td><input type="text" name="myofpassing" class='form-control' value="<?php echo $row[29]; ?>" ></td>
        </tr>

        <tr>
            <td>Marks Obtained:</td>
            <td><input type="text" name="marksobtained12th" class='form-control' value="<?php echo $row[30]; ?>" ></td>
        </tr>

        <tr>
            <td>Marks Out Off:</td>
            <td><input type="text" name="marksoutoff12th" class='form-control' value="<?php echo $row[31]; ?>" ></td>
        </tr>

        <tr>
            <td>Percentage (%):</td>
            <td><input type="text" name="percentage12th" class='form-control' value="<?php echo $row[32]; ?>" ></td>
        </tr>

        <tr>
            <td>Grade:</td>
            <td><input type="text" name="grade12th" class='form-control' value="<?php echo $row[33]; ?>" ></td>
        </tr>

        <tr>
            <td>Student Personal E-mail ID:</td>
            <td><input type="text" name="studentemail" class='form-control' value="<?php echo $row[34]; ?>" ></td>
        </tr>

        <tr>
            <td>Student Mobile No.:</td>
            <td><input type="text" name="studentmobileno" class='form-control' value="<?php echo $row[35]; ?>" ></td>
        </tr>

        <tr>
            <td>Permanent Address:</td>
            <td><input type="text" name="permanentaddress" class='form-control' value="<?php echo $row[36]; ?>" ></td>
        </tr>

        <tr>
            <td>Tehsil / Taulika:</td>
            <td><input type="text" name="tehsil" class='form-control' value="<?php echo $row[37]; ?>" ></td>
        </tr>

        <tr>
            <td>District:</td>
            <td><input type="text" name="district" class='form-control' value="<?php echo $row[38]; ?>" ></td>
        </tr>

        <tr>
            <td>State:</td>
            <td><input type="text" name="studentstate" class='form-control' value="<?php echo $row[39]; ?>" ></td>
        </tr>

        <tr>
            <td>Pincode:</td>
            <td><input type="text" name="pincode" class='form-control' value="<?php echo $row[40]; ?>" ></td>
        </tr>

        <tr>
            <td>Educational Gap Before Admission in MIT-WPU:</td>
            <td><input type="text" name="educationalgap" class='form-control' value="<?php echo $row[41]; ?>" ></td>
        </tr>

        <tr>
            <td>Last Exam / Program Name:</td>
            <td><input type="text" name="lastexamname" class='form-control' value="<?php echo $row[42]; ?>" ></td>
        </tr>

        <tr>
            <td>Exam Seat No.</td>
            <td><input type="text" name="lastexamseatno" class='form-control' value="<?php echo $row[43]; ?>" ></td>
        </tr>

        <tr>
            <td>Month of Passing:</td>
            <td><input type="text" name="educationalgapexammonthofpassing" class="form-control" value="<?php echo $row[44]; ?>" ></td>
        </tr>

        <tr>
            <td>Year of Passing:</td>
            <td><input type="text" name="educationalgapexamyearofpassing" class="form-control" value="<?php echo $row[45]; ?>" ></td>
        </tr>

        <tr>
            <td>Percentage(%):</td>
            <td><input type="text" name="educationalgapexampercentage" class="form-control" value="<?php echo $row[46]; ?>" ></td>
        </tr>

        <tr>
            <td>Grade:</td>
            <td><input type="text" name="educationalgapexamgrade" class="form-control" value="<?php echo $row[47]; ?>" ></td>
        </tr>

        <tr>
            <td>Minority</td>
            <td><input type="text" name="minority" class="form-control" value="<?php echo $row[48]; ?>" > </td>
        </tr>
        
        <tr>
            <td>Minority Type</td>
            <td><input type="text" name="typeofminority" class="form-control" value="<?php echo $row[49]; ?>" ></td>
        </tr>

        <tr>
            <td>Defense Personal of India</td>
            <td><input type="text" name="wardofdefensepersonal" class="form-control" value="<?php echo $row[50]; ?>" ></td>
        </tr>

        <tr>
            <td>Rank</td>
            <td><input type="text" name="defensepersonalrank" id="" class="form-control" value="<?php echo $row[51]; ?>" ></td>
        </tr>

        <tr>
            <td>Ward of MIT-WPU / MAEER's Staff</td>
            <td><input type="text" name="wardofmitwpu" class="form-control" value="<?php echo $row[52]; ?>" ></td>
        </tr>

        <tr>
            <td>Alumni Student of MIT-WPU </td>
            <td><input type="text" name="alumniofmitwpu" class="form-control" value="<?php echo $row[53]; ?>" ></td>
        </tr>

        <tr>
            <td>Aadhar Card Number</td>
            <td><input type="text" name="aadharno" class="form-control" value="<?php echo $row[56]; ?>" ></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
               
                <button><a href="updateug1.php?a=<?php echo $row[0]; ?>">Update</a></button>
            </td>
        </tr>

       
    </table>
     </form>
     </div>
     <?php
}
}
     ?>
</body>

</html>
