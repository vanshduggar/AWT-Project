<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>UG Form</title>
    <script>
     function percentage()
     {
         var a=document.mine.marksobtained12th.value;
         var b=document.mine.marksoutoff12th.value;
         
         var res= (parseInt(a)/parseInt(b)*100);
         document.mine.percentage12th.value=parseFloat(res).toFixed(2);
     }
    </script>
    <script>
	    function checkvalid()
		{
		if(document.getElementById("chk").checked==true)
		 document.getElementById("sub").disabled=false;
		 else
		 document.getElementById("sub").disabled=true;
		 }
	</script>
<script>


// nationality

$(document).ready(function()
{
	$("#nationality1").change(function()
	{
		var nationality=this.value;
		$.post("nationalityc.php",{nl:nationality},function(data)
			{
				$("#nationalityc").html(data).show();
	
			});
	});
});

// Domicile

$(document).ready(function()
{
	$("#domicile1").change(function()
	{
		var domi=this.value;
		$.post("domicilec.php",{domi:domi},function(data)
			{
				$("#domicilec").html(data).show();
	
			});
	});
});

// State Board
$(document).ready(function()
{
	$("#stateboard1").change(function()
	{
		var stb=this.value;
		$.post("stateboardc.php",{stb:stb},function(data)
			{
				$("#stateboardc").html(data).show();
	
			});
	});
});

// stateboard
$(document).ready(function()
{
	$("#stateboard1").change(function()
	{
		var stb=this.value;

        
            $.post("stateboardc.php",{stb:stb},function(data)
			{
				$("#boardstate1").html(data).show();
	
			});
        
            
	});
}); 

//Educational Gap

$(document).ready(function()
{
	$("#educationalgap0").change(function()
	{
		var egap=this.value;

        
            $.post("edugapc.php",{egap:egap},function(data)
			{
				$("#educationalgap1").html(data).show();
	
			});
        
            
	});
}); 

//Minority

$(document).ready(function()
{
	$("#minority0").change(function()
	{
		var mino=this.value;

        
            $.post("minorityc.php",{mino:mino},function(data)
			{
				$("#minority1").html(data).show();
	
			});
        
            
	});
}); 

//Ward of Defense Personel
$(document).ready(function()
{
	$("#wodpersonel0").change(function()
	{
		var wodp=this.value;

        
            $.post("wodpersonelc.php",{wodp:wodp},function(data)
			{
				$("#wodpersonel1").html(data).show();
	
			});
        
            
	});
}); 

//lctc certificate

$(document).ready(function()
{
	$("#lctc0").change(function()
	{
		var lctc=this.value;

        
            $.post("lctcc.php",{lctc:lctc},function(data)
			{
				$("#lctc1").html(data).show();
	
			});
        
            
	});
});

//Migration Certificate

$(document).ready(function()
{
	$("#migrac0").change(function()
	{
		var migrac=this.value;

        
            $.post("migracc.php",{migrac:migrac},function(data)
			{
				$("#migrac1").html(data).show();
	
			});
        
            
	});
});

//Reserve Category

$(document).ready(function()
{
	$("#reservecategory0").change(function()
	{
		var rc=this.value;

        
            $.post("reservecategoryc.php",{rc:rc},function(data)
			{
				$("#reservecategory1").html(data).show();
	
			});
        
            
	});
});
</script>
</head>
<body>
<?php
    include('mitlogo.php');
    ?>
<h1 align="Center"> <b> UG-Eligibility Form </b> </h1>
    <?php
    $emails=$_REQUEST["email"];
    $mobileno=$_REQUEST["mobileno"];
    ?>
    <form name='mine' action="ug1.php" method="post" enctype="multipart/form-data">
    
     <table border="10" cellpadding=10 cellspacing=10 align="center" class="table table-bordered" style=text-align:center>
         <tr>
             <td>Email:</td>
             <td><input type="email" name="emails" value="<?php echo $emails; ?>" required placeholder="Enter your Email Address" class="form-control" readonly></td>
</tr>
<tr>
             <td>PRN No.
                 (Only 10 Digit Number):
             </td>
              <td>
                  <input type="text" name="prnno" value="" required placeholder="Your answer" class="form-control">
              </td>
</tr>
<tr>
    <td>Academic Year</td>
    <td>
    <select name='academicyear' class='form-control'>
 <option value=''>Choose Year</option>
 <?php
  include('db.php');
  $r=mysqli_query($con,"select year from academic_year order by id desc limit 1");
  while($row=mysqli_fetch_array($r))
  {
      echo "<option value='$row[0]'>$row[0]</option>";
  }
?>
	 
 
</select>

 </td>
</tr>
<tr>
              <td>Degree Level</td>
              <td>
                  <select name="degreelevel" id="degreelevel1" class="form-control">
                      <option value="" selected>Choose</option>
                  <option value="UG(Under Graduate-After 12/HSC)">UG(Under Graduate-After 12/HSC)</option>
                <option value="Diploma(Diploma in Photography)">Diploma(Diploma in Photography)</option>
                     </select>
              </td>
            </tr>
             <tr>
                 <td>UG/PG Programe Courses</td>
                 <td>
                 <select name='ugpgprogram' id='ugpgprogram1' class='form-control'>
	
<option value='' selected>Choose</option>
<option value='BA(Hons)English'>BA(Hons) English</option>
<option value='BA(Hons)Psychology'>BA(Hons) Psychology</option>
<option value='BA(Hons)Political Science'>BA(Hons) Political Science</option>
<option value='BA(Hons) Liberal Arts'>BA(Hons) Liberal Arts</option>
<option value='BBA(Liberal Studies)Leadership'>BBA(Liberal Studies)Leadership</option>
<option value='BFA Applied Arts'>BFA Applied Arts</option>
<option value='BA Journalism and Mass Communication'>BA Journalism and Mass Communication</option>
<option value='BA Photography'>BA Photography</option>
<option value='Diploma in Photography'>Diploma in Photography</option>
<option value='BBA LLB(Hons)'>BBA LLB(Hons)</option>
<option value='B.Com.'>B.Com.</option>
<option value='B.Com.(Hons)'>B.Com.(Hons)</option>
<option value='B.Sc.(Hons)Economics'>B.Sc.(Hons)Economics</option>
<option value='BCA Science'>BCA Science</option>
<option value='B.Sc. Computational Mathematics & Statistics'>B.Sc. Computational Mathematics & Statistics</option>
<option value='BA(Hons) Government & Administration'>BA(Hons) Government & Administration</option>
<option value='BA Social Science'>BA Social Science</option>
<option value='B.Sc. Hospitality and Hotel Administration'>B.Sc. Hospitality and Hotel Administration</option></select>
                 </td>
                    </tr>
                    <tr>
                 <td>Name of student as per previous Marksheet</td>
                 <td>
                     <input type="text" name="studentname" value="" placeholder="Your answer" required class='form-control'>
                 </td>
                    </tr>
                    <tr>
                 <td>Mother Name(Only First Name)</td>
                 <td>
                     <input type="text" name="mothername" value="" required class='form-control' placeholder="Your answer">
                 </td>
                    </tr>
                    <tr>
                 <td>Nationality</td>
                 <td>
                     <select name="nationality" id="nationality1" required class='form-control'>
                         <option value="">Choose</option>
                    <option value="INDIAN">INDIAN</option>
                    <option value="Others">Others</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>Please specify other nationality</td>
                 <td id="nationalityc">
                     <input type="text" name="othernationality" value="" required class='form-control' placeholder="Your answer">
                 </td>
                    </tr>
                    <tr>
                 <td>Gender</td>
                 <td>
                 <select name="gender" id="" required class='form-control'>
                     <option value="" selected>Choose</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Transgender">Transgender</option>
                 </select>
                </td>
                    </tr>
                    <tr>
                <td>Domicile</td>
                <td>
                    <select name="domicile" id="domicile1" required class='form-control'>
                        <option value="" selected>Choose</option>
                        <option value="MS-(Maharashtra Domicile Student)">MS-(Maharashtra Domicile Student)</option>
                        <option value="OMS-(Other than Maharashtra Domicile Student)">OMS-(Other than Maharashtra Domicile Student)</option>
                        <option value="Foreigner-(CIWGC & SEA/OCI/Foreign Nation)">Foreigner-(CIWGC & SEA/OCI/Foreign Nation)</option>
                        <option value="Non Resident Indian (NRI) ">Non Resident Indian (NRI) </option>
                    </select>
                </td>
                    </tr>
                    <tr>
                <td>Date of Birth</td>
                <td>
                    <input type="date" name="dob" value="" required class='form-control'>
                </td>
                    </tr>
                    <tr>
                <td>Place of Birth</td>
                <td>
                    <input type="text" name="placeofbirth" value="" required class='form-control'>
                </td>
             </tr>
             <tr>
                 <td>Domicile/Birth Certificate</td>
                 <td id="domicilec">
                     <input type="file" name="domicilebirthcertificate" value="" required class='form-control'>
                 </td>
                    </tr>
                    
                     <tr>
                 <td>Select your reserve category</td>
                 <td>
                     <select name="reservecategory" id="reservecategory0" required class='form-control' onchange="reservecategory()">
                    <option value="" selected>Choose</option>
                    <option value="OPEN / General">OPEN / General</option>
                    <option value="OBC">OBC</option>
                    <option value="VJ">VJ</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                    <option value="DT(A)">DT(A)</option>
                    <option value="NT(B)">NT(B)</option>
                    <option value="NT(C)">NT(C)</option>
                    <option value="NT(D)">NT(D)</option>
                    <option value="SBC">SBC</option>
                     </select>
                 </td>
                    </tr>
                    <tr id="reservecategory1">
                    
                    </tr>
                    <tr>
                 <td>Are you a physically handicap?</td>
                 <td>
                     <select name="handicap" id="" required class='form-control'>
                         <option value="" selected>Choose</option>
                         <option value="YES">YES</option>
                         <option value="NO">NO</option>
                     </select>
                 </td>
                    </tr>
                    <tr>
                 <td>Previous examination details</td>
                 <td>
                     <select name="previousexam" id="" required class='form-control'>
                         <option value="" selected>Choose</option>
                         <option value="Completed 12th">Completed 12th</option>
                         <option value="Completed Graduation">Completed Graduation</option>
                     </select>
                    </td>
                    </tr>
                    <tr>
                    <td> 
                    Have you passed Exam from state Board?
                    </td>
                    <td>

                    <select name="stateboard" id="stateboard1" required class="form-control" onchange="stateboard()">

                    <option value="" selected>Choose</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    </select>
                    </td>
                    </tr>

             <tr id="boardstate1">
                <td>
                     Select the Board State
                </td>
                 <td>
                     <div id="boardstate1">
                     <select name="boardstate" required class="form-control">
                         <option value="" selected>Choose</option>
                         <option value="Andhra Pradesh">Andhra Pradesh</option> 
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                     </select> </div>
                 </td>
             </tr>   
             <tr>
                <td>
                    Name of School / Jr. College
                </td>
                <td>
                    <input type="text" name="school" class='form-control' required>
                </td>
             </tr>
             <tr>
                 <td>
                     City of Jr. College/ School.
                 </td>
                 <td>
                     <input type="text" name="cityschool" class='form-control' required>
                 </td>
             </tr>
             <tr>
                 <td>
                     State of Jr. College / School.
                 </td>
                 <td>
                     <select name="statecollegeschool" id="" required class='form-control'>
                         <option value=""selected>Choose</option>
                         <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>
                     HSC(12th Marksheet)
                 </td>
                 <td>
                     <input type="file" value="" name="HSC12thmarksheet" required class="form-control">
                 </td>
             </tr>
             <tr>
                 <td>
                 Exam Seat No as per 12th Marksheet
                 </td>
                 <td>
                     <input type="text" name="examseatno12th" value="" class="form-control" required>
                 </td>
             </tr>
             <tr>
                 <td>12th / HSC Stream</td>
                 <td>
                     <select name="HSC12thStream" id="" required class="form-control">
                         <option value="" selected>Choose</option>
                         <option value="Arts">Arts</option>
                         <option value="Commerce">Commerce</option>
                         <option value="Science">Science</option>
                         <option value="Engineering Diploma">Engineering Diploma</option>
                     </select>
                 </td>
             </tr>
             <tr>
                 <td>Month & Year of Passing</td>
                 <td>
                     <input type="date" value="" name="myofpassing" required class="form-control">
                 </td>
             </tr>
             <tr>
                 <td>Marks Obtained </td>
                 <td>
                     <input type="text" value="" name="marksobtained12th" required class="form-control" maxlength="3">
                 </td>
             </tr>
             <tr>
                 <td>Marks Out Off</td>
                 <td>
                 <input type="text" value="" name="marksoutoff12th" required class="form-control" maxlength="3">
                 </td>
             </tr>
             <tr>
                 <td>% Percentage</td>
                 <td>
                     <input type="text" id="percentage12th1" value="" name="percentage12th" required class="form-control" readonly onfocus="percentage()">
                 </td>
             </tr>
             <tr>
             <td>Grade</td>
             <td>
                 <select name="grade12th" id="" required class="form-control">
                     <option value="" selected>Choose</option>
                     <option value="First Class and Distinction">First Class and Distinction</option>
                     <option value="First Class">First Class</option>
                     <option value="Second Class">Second Class</option>
                     <option value="Third Class">Third Class</option>
                 </select>
             </td>
            </tr> 
             <tr>
                 <td>Student personal email ID</td>
                 <td>
                 <input type="email" value="" name="studentemail" required class="form-control">
                 </td>
             </tr>
             <tr>
                 <td>Student Mobile No.</td>
                 <td>
                 <input type="text" value="<?php echo $mobileno; ?>" name="studentmobileno" required class="form-control" readonly>
                 </td>
             </tr>
             <tr>
                 <td>Permanent Address</td>
                 <td>
                 <textarea name="permanentaddress" id="" cols="30" rows="4" required class="form-control"></textarea>
                 </td>
             </tr>
             <tr>
                 <td>Tehsil</td>
                 <td>
                 <input type="text" value="" name="tehsil" required class="form-control">
                 </td>
             </tr>
             <tr>
                 <td>District</td>
                 <td>
                 <input type="text" value="" name="district" required class="form-control">
                 </td>
             </tr>
             
             <tr>
                <td>
                     State
                </td>
                 <td>
                     <select name="studentstate" id="" required class='form-control'>
                         <option value="" selected>Choose</option>
                         <option value="Andhra Pradesh">Andhra Pradesh</option>
<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
<option value="Arunachal Pradesh">Arunachal Pradesh</option>
<option value="Assam">Assam</option>
<option value="Bihar">Bihar</option>
<option value="Chandigarh">Chandigarh</option>
<option value="Chhattisgarh">Chhattisgarh</option>
<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
<option value="Daman and Diu">Daman and Diu</option>
<option value="Delhi">Delhi</option>
<option value="Lakshadweep">Lakshadweep</option>
<option value="Puducherry">Puducherry</option>
<option value="Goa">Goa</option>
<option value="Gujarat">Gujarat</option>
<option value="Haryana">Haryana</option>
<option value="Himachal Pradesh">Himachal Pradesh</option>
<option value="Jammu and Kashmir">Jammu and Kashmir</option>
<option value="Jharkhand">Jharkhand</option>
<option value="Karnataka">Karnataka</option>
<option value="Kerala">Kerala</option>
<option value="Madhya Pradesh">Madhya Pradesh</option>
<option value="Maharashtra">Maharashtra</option>
<option value="Manipur">Manipur</option>
<option value="Meghalaya">Meghalaya</option>
<option value="Mizoram">Mizoram</option>
<option value="Nagaland">Nagaland</option>
<option value="Odisha">Odisha</option>
<option value="Punjab">Punjab</option>
<option value="Rajasthan">Rajasthan</option>
<option value="Sikkim">Sikkim</option>
<option value="Tamil Nadu">Tamil Nadu</option>
<option value="Telangana">Telangana</option>
<option value="Tripura">Tripura</option>
<option value="Uttar Pradesh">Uttar Pradesh</option>
<option value="Uttarakhand">Uttarakhand</option>
<option value="West Bengal">West Bengal</option>
                     </select>
                 </td>
             </tr> 
             <tr>
                 <td>Pincode</td>
                 <td>
                 <input type="text" value="" name="pincode" required class="form-control">
                 </td>
             </tr>
             <tr>
                 <td>Do you have educational gap before joining MIT-WPU</td>
                 <td>
                     <select name="educationalgap" id="educationalgap0" required class="form-control" onchange="edugap()">
                         <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                     </select>
                 </td>
             </tr> 

                 <!--  Educational Gap Details  -->
                  <tr id="educationalgap1"> 
                   
                   </tr>
                   <tr>
                <td>Are you belonging from Minority?</td>
                <td>
                    
                    <select name="minority" id="minority0" required class="form-control" onchange="minority()">
                    <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Select type of minority</td>
                <td id="minority1">
                <select name="typeofminority" id="" required class="form-control" disabled>
    <option value="" selected>Choose</option>
         <option value="Linguistic">Linguistic</option>
         <option value="Religious">Religious</option>
    </select>
                </td>
            </tr>
            <tr>
                <td>Are you a ward of Defense Personal of India?</td>
                <td>
                <select name="wardofdefensepersonal" id="wodpersonel0" required class="form-control" onchange="wodpersonel()">
                    <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>
                </td>
            </tr>  

            <!-- Ward of Defense Personal == Yes -->
            <tr id="wodpersonel1">
                
            </tr>
            <tr>
                <td>Are you a ward of MIT-WPU / MAEER's MIT staff ? </td>
                <td>
                <select name="wardofmitwpu" id="" required class="form-control">
                    <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td>Are you an alumni student of MIT-WPU / MAEER's MIT </td>
                <td>
                <select name="alumniofmitwpu" id="" required class="form-control">
                    <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>SSC (10th Marksheet)</td>
                <td>
                    <input type="file" name="ssc10thmarksheet" value="" required class="form-control">
                </td>
            </tr> 
            <tr>
                <td><br><br> Aadhar Card</td>
                <td>
                    <input type="file" name="aadharcard" value="" required class="form-control">
                    <hr>
                    <input type="text" name="aadharno" value="" required class="form-control" placeholder="Enter Aadhar Card Number Here...">
                </td>
                </tr> 
            <tr>
                <td>Do you have LC / TC certificate</td>
                <td>
                <select name="lctccertificate" id="lctc0" required class="form-control" onchange="lctc()">
                    <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td>Upload LC / TC Certificate</td>
                <td id="lctc1">
                    <input type="file" name="uploadlctc" value="" required class="form-control" disabled>
                </td>
            </tr>
            <tr>
                <td>Do you have Migration Certificate</td>
                <td>
                <select name="migrationcertificate" id="migrac0" required class="form-control" onchange="migrac()">
                    <option value="" selected>Choose</option>
                         <option value="Yes">Yes</option>
                         <option value="No">No</option>
                    </select>
                </td>
            </tr> 
            <tr>
                <td> Upload Migration Certificate </td>
                <td id="migrac1">
                    <input type="file" name="uploadmigration" value="" required class="form-control" disabled>
                </td>
            </tr> 
            <tr>
                <td>Student Photo</td>
                <td>
                    <input type="file" name="studentphoto" value="" required class="form-control">
                </td>
            </tr>
            <tr>
                <td>Student Signature</td>
                <td>
                    <input type="file" name="studentsignature" value="" required class="form-control">
                </td>
            </tr> 
            <tr>
                <td colspan="2">
                <input type='checkbox' name='chk' id='chk' value='agree' onclick='checkvalid()'> Hereby, I declare all the information given above is correct.If something found wrong information then I will responsible for it.
                </td>
            </tr> 
             <tr>
           <td colspan="2" align="center">
         <input type="submit" value="Submit" class="btn btn-primary" id='sub' disabled> 
         <input type="reset" value="Cancel" class="btn btn-danger">
           </td>
             </tr> 
     </table>
    </form>
</body>
</html>