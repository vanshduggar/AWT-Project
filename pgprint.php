<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ug-Pg form</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div style="border:2px solid black;"> 
	<?php
	include('db.php');
    $id=$_REQUEST["a"];

	$r=mysqli_query($con,"select * from pg where id='$id'");

	if($row=mysqli_fetch_array($r))
	{
	?>
		<div class="container-fluid">
			<div class="row ">
				<div class="col-4 college-logo"><img src="img/logo.png" alt="logo.png">
			</div>

			<div class="col-3 offset-1 title">
				<h4>Eligibility Form:-PG</h4>
			</div>

			<div class="col-3 offset-1 academic-year">
				<table>
					<tr>
						<td>Academic Year : </td>
						<td><span><?php echo $row[3]; ?></span></td>

					</tr>
					<tr>
						<td>PRN No. :</td>
						<td><span><?php echo $row[2]; ?></span></td>

					</tr><tr>
						<td>Program Name :</td>
						<td><span><?php echo $row[5]; ?></span></td>

					</tr>

				</table>
			</div>
			
		</div>

		<hr>
		
		<div class="row">
			<div class="col student-information">
				<table id="table">
				<tr>
					<td colspan="2">
							Domicile : <span><?php echo $row[11]; ?></span>
							 </td>
					<td colspan="2">
							Adm. Type : <span>regular</span>
					</td>
					<td rowspan="3" >
							<span><img src="upload/<?php echo $row[59]; ?>" alt="" width="80" height="80"> </span><br><br>
							<span><img src="upload/<?php echo $row[60]; ?>" alt="" width="80" height="40"></span>
	
					</td>
				</tr>

				<tr>
					<td colspan="4">
						1. Name of the programme to which application is sought :
						<span><?php echo $row[5]; ?></span>

					</td>
				</tr>
				<tr>
					<td colspan="2">
						2.  Student Name as per previous marksheet 
						( In English capital letters only ) :
						<span><?php echo $row[6]; ?></span>

					</td>
					<td colspan="2">
						Mother Name :
						<span><?php echo $row[7]; ?></span>
					</td>
				</tr>
				<tr>
						
					<td >
						3. Nationality :
						<span><?php echo $row[8]; ?></span>
					</td>
					<td >
						4. Date Of Birth :
						<span><?php echo $row[12]; ?></span></td>
					
					<td>
						5. Place of Birth : <span><?php echo $row[13]; ?></span>
					</td>
							
					<td>
							6. Gender : <span><?php echo $row[10]; ?></span>
					</td>
					
				</tr>
				<tr>
						<td colspan="5">
							7. Reserved Category *Do you belong to any of the following Reserved Categories?  Category :

							<span><?php echo $row[15]; ?></span>

							(If so attach a certificate of a Competent Authority in Support of it)
						</td>
				
				</tr>
				<tr>
					<td colspan="2">
						8. Do you belong to the creamy layer of NT(C), NT (D) and OBC? : 
						<span>
						<?php echo $row[17]; ?>
						</span>
					</td>
					<td colspan="3">
						9. Are you a physically handicap? :
						<span>
						<?php echo $row[18]; ?>
						</span>
					</td>
				</tr>
			</table>

			<table id="sub-table-1">
					<tr>
						 <td colspan="5">
							 10. Particular of Qualifying Examination :
						 </td>
					</tr>
					<tr>
						<td colspan="1">
							1). Name of Course / Program :  
							<span>
								<?php echo $row[20]; ?>
							</span>
						</td>
						<td colspan="4">
							2).	Name of College : 
							<span>
							<?php echo $row[22]; ?>
							</span>
						</td>
					</tr>
					<tr>
						<td colspan='5'>
							3). Name of the University : 
								<span>
								<?php echo $row[23]; ?>
								</span>
						</td>
								
								
					</tr>
					<tr>
						<td colspan="1">
							4). City of College : 
								<span>
								<?php echo $row[24]; ?>
								</span>
						</td>
						<td colspan="4">
							d). State : 
								<span>
								<?php echo $row[25]; ?>
								</span>
						</td>
					</tr>
			</table>
			
			<span>11.</span>
			
			<table id="sub-table-2">
				<tr>
					<th>
						Exam Seat no.
					</th>
					<th>
						Stream
					</th>
					<th>
						Month of Passing
					</th>
					<th>
						Year of Passing
					</th>
					<th>
						Percentage(%)
					</th>
					<th>
						Class/Grade
					</th>
				</tr>
				<tr>
					<td><span><?php echo $row[27]; ?></span></td>
					<td><span><?php echo $row[21]; ?></span></td>
					<td><span><?php echo $row[29]; ?></span></td>
					<td><span><?php echo $row[29]; ?></span></td>
					<td><span><?php echo $row[30]; ?></span></td>
					<td><span><?php echo $row[31]; ?></span></td>
				</tr>
							
			</table>
			<table id="table">
					<tr>
						<td colspan="1">
							12. Email-ID : <span><?php echo $row[32]; ?></span>
						</td>
						<td colspan="4">
							13. Mobile no. : <span><?php echo $row[33]; ?></span>
						</td>
					</tr>
			</table>
			<table id="sub-table-1">
				<span>14.</span>
					<tr>
						<td colspan="2">
							Permanent Address: <span><?php echo $row[34]; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							Tahsil : <span><?php echo $row[35]; ?></span>
						</td>
						<td>
							District: <span><?php echo $row[36]; ?></span>
						</td>
					</tr>
					<tr>
						<td>
							State: <span><?php echo $row[37]; ?></span>
						</td>
						<td>
							Pin Code: <span><?php echo $row[38]; ?></span>
						</td>
					</tr>
			</table>
			<div>
				15. Please Specify Education Gap details if any
				<span><?php echo $row[39]; ?></span>
		<table id="sub-table-2">
			<tr>
				<th>Last Exam</th>
				<th>Exam Seat no</th>
				<th>Month Of Passing</th>
				<th>Year of Passing</th>
				<th>Percentage(%)</th>
				<th>Class/Grade</th>
			</tr>
			<tr>
				<td>
					<?php
					if($row[40]!="")
					{
						echo $row[40]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?>
				</td>
				<td><?php
					if($row[41]!="")
					{
						echo $row[41]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?></td>
				<td><?php
					if($row[42]!="")
					{
						echo $row[42]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?></td>
				<td><?php
					if($row[43]!="0000-00-00")
					{
						echo $row[43]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?></td>
				<td><?php
					if($row[44]!="0")
					{
						echo $row[44]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?></td>
				<td><?php
					if($row[45]!="")
					{
						echo $row[45]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?></td>
			</tr>
		</table>
			</div>
			<div>
				16. Are you belongs to minority ? <span><?php echo $row[46]; ?></span>
				<p>(if yes please Specify type) <span>
				<?php
					if($row[47]!="")
					{
						echo $row[47]; 
					}
					 else
					 {
						 echo "-----";
					 }
					 ?>
				</span></p>
			</div>
			</div>
		</div>
	</div>
	<hr>

	<table border="1" align="center">
		<th colspan="4" align="center">
			This Documents to Take to College While Verification
		</th>
		<tr>
			<td>Original Documents</td>
			<td></td>
			<td>
				Attested Photo Copies 
			</td>
			<td>

			</td>
		</tr>

		<tr>
			<td>
			1. Leaving / Transfer certificate
			</td>
			<td>

			</td>
			<td>
				1. 12th /HSC marksheet
			</td>
			<td>

			</td>
		</tr>

		<tr>
			<td>
				2. Migration certificate (other than Maharashtra Board)
			</td>

			<td>

			</td>

			<td>
				2. Domicile / Birth certificate (only MS Student)
			</td>

			<td>

			</td>
		</tr>

		<tr>
			<td>
				3. Gap certificate (If applicable)
			</td>

			<td>

			</td>

			<td>
				3. Caste certificate (For Reserve MS Student)
			</td>

			<td>

			</td>
		</tr>

		<tr>
			<td>

			</td>

			<td>

			</td>

			<td>
				4. Non Creamy Layer certificate (for Reserve Category)
			</td>

			<td>
				
			</td>
		</tr>

		
	</table>
	<div style="height:450px">

	</div>
</div>
<div style="height: 50px;">

</div>
<div style="border:2px solid black;"> 
<div class="row">
<div class="col-4 college-logo"><img src="img/logo.png" alt="logo.png" style="height: 300px;width:1000px;">
			</div>
</div>

	<table border="1" align="center" cellspacing="0" cellpadding="10">

        <tr>
            <td colspan="3">
                  <h1 align="center"> UNDERTAKING ACADEMIC YEAR </h1>  
            </td>
        </tr>

        <tr>
            <td colspan="3">
                I hereby Undertake Following, <br>
                1. I Mr./Miss. <b> <?php echo $row[6]; ?> </b> &nbsp; student of first year <?php  ?> (Branch) & Division <?php ?> will attend all theory Classes and All Practical.
                <br>
                2. I will not join any sort of Common off.
                <br>
                3. I will follow all the rules and regulations laid by the MIT-WPU from time to time.
                <br>
                4. I have read and understand the eligibility criteria of the above said programs prescribed by MIT-WPU and I am eligible for the same.
                <br>

                If I fail to abide by anyone of the above, I know that I will not be allowed to appear for the examination of the semester and i know that i will cause loss of one year of my academic career.

                
            </td>
        </tr>
        <tr>
            <td>
                Date:
                <br>
                Place: Pune
            </td>

            <td align="center">
                Student Signature: <span><img src="upload/<?php echo $row[60]; ?>" alt="" width="80" height="40"></span>
            </td>

            <td>
                Parents Signature:
                <br>
                (Parents Contact no.): 
            </td>
        </tr>

        <tr>
            <td colspan="3">

            </td>
        </tr>
        <tr>
            <td colspan="3">
                <h1 align="center"> Anti Raging Undertaking</h1>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                I Mr. / Miss. <b> <?php echo $row[6]; ?> </b> hereby undertake that if any incident of raging by me comes to the notice of the university authority. I shall be given liberty to explain and if my explanation is not found satisfactory, the dean or the anti-raging committee will expel me from the institute.
            </td>
</tr>

        <tr>
            <td>
                Date:..........
            </td>

            <td colspan="2" align="right">
            Student Signature: <span><img src="upload/<?php echo $row[60]; ?>" alt="" width="80" height="40"></span>
            </td>
        </tr>

        <tr>
            <td colspan="3">

            </td>
        </tr>

        <tr>
            <td colspan="3">
                <h1 align="center"> Office Use Only</h1>
            </td>
        </tr>

        <tr>
            <td colspan="3">
                On the basis of Application & Subsequent submission of required Documents,
                <br>
                Mr./Miss. ............................................ <br>
                has been admitted to First Year ______ for the academic year _____ under MIT-WPU.
                <br>
                <br>
                <br>
            </td>
        </tr>

        <tr>
            <td colspan="3">

            </td>
        </tr>
        
        <tr>
            <td>
                Document Verfication <br> (Class Teacher)
            </td>

            <td>
                Signature of Receiving authority
            </td>

            <td>
                Signature of Approving <br> Authority, MIT-WPU <br> Dean / Asso. Dean
            </td>
        </tr>
        <tr>
            <td>
                Date:_________ 
            </td>

            <td colspan="2" align="center">
                Place: <b>PUNE</b> 
            </td>
        </tr>
    </table>
	</div>
	<?php
	}
	?>
	<div style="text-align: center;">
   <input type='button' onclick='window.print()' value='Print'>
   </div>
</body>
</html>