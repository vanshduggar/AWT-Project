<?php

include("db.php");

$emails=$_POST["emails"];
$prnno=$_POST["prnno"];
$academicyear=$_POST["academicyear"];
$degreelevel=$_POST["degreelevel"];
$ugpgprogram=$_POST["ugpgprogram"];
$studentname=$_POST["studentname"];
$mothername=$_POST["mothername"];
$nationality=$_POST["nationality"];
$othernationality=$_POST["othernationality"];
$gender=$_POST["gender"];
$domicile=$_POST["domicile"];
$dob=$_POST["dob"];
$placeofbirth=$_POST["placeofbirth"];
$domicilebirthcertificate=$_POST["domicilebirthcertificate"];
move_uploaded_file($_FILES["domicilebirthcertificate"]["tmp_name"],"upload/".$_FILES["domicilebirthcertificate"]["name"]);
$domicilebirthcertificate=$_FILES["domicilebirthcertificate"]["name"];
$reservecategory=$_POST["reservecategory"];

$castcategory=$_POST["castcategory"];
move_uploaded_file($_FILES["castcategory"]["tmp_name"],"upload/".$_FILES["castcategory"]["name"]);
$castcategory=$_FILES["castcategory"]["name"];

$creamylayer=$_POST["creamylayer"];
$handicap=$_POST["handicap"];
$previousexam=$_POST["previousexam"];
$stateboard=$_POST["stateboard"];
$boardstate=$_POST["boardstate"];
$centralboard=$_POST["centralboard"];
$school=$_POST["school"];
$cityschool=$_POST["cityschool"];
$statecollegeschool=$_POST["statecollegeschool"];

$HSC12thmarksheet=$_POST["HSC12thmarksheet"];
move_uploaded_file($_FILES["HSC12thmarksheet"]["tmp_name"],"upload/".$_FILES["HSC12thmarksheet"]["name"]);
$HSC12thmarksheet=$_FILES["HSC12thmarksheet"]["name"];
$examseatno12th=$_POST["examseatno12th"];
$HSC12thStream=$_POST["HSC12thStream"];

$myofpassing=$_POST["myofpassing"];
$marksobtained12th=$_POST["marksobtained12th"];
$marksoutoff12th=$_POST["marksoutoff12th"];
$percentage12th=$_POST["percentage12th"];
$grade12th=$_POST["grade12th"];
$studentemail=$_POST["studentemail"];
$studentmobileno=$_POST["studentmobileno"];
$permanentaddress=$_POST["permanentaddress"];
$tehsil=$_POST["tehsil"];
$district=$_POST["district"];
$studentstate=$_POST["studentstate"];
$pincode=$_POST["pincode"];

$educationalgap=$_POST["educationalgap"];
$lastexamname=$_POST["lastexamname"];
$lastexamseatno=$_POST["lastexamseatno"];
$educationalgapexammonthofpassing=$_POST["educationalgapexammonthofpassing"];
$educationalgapexamyearofpassing=$_POST["educationalgapexamyearofpassing"];
$educationalgapexampercentage=$_POST["educationalgapexampercentage"];
$educationalgapexamgrade=$_POST["educationalgapexamgrade"];
$minority=$_POST["minority"];

$typeofminority=$_POST["typeofminority"];
$wardofdefensepersonal=$_POST["wardofdefensepersonal"];
$defensepersonalrank=$_POST["defensepersonalrank"];
$wardofmitwpu=$_POST["wardofmitwpu"];
$alumniofmitwpu=$_POST["alumniofmitwpu"];

$ssc10thmarksheet=$_POST["ssc10thmarksheet"];
move_uploaded_file($_FILES["ssc10thmarksheet"]["tmp_name"],"upload/".$_FILES["ssc10thmarksheete"]["name"]);
$ssc10thmarksheet=$_FILES["ssc10thmarksheet"]["name"];

$aadharcard=$_POST["aadharcard"];
move_uploaded_file($_FILES["aadharcard"]["tmp_name"],"upload/".$_FILES["aadharcard"]["name"]);
$aadharcard=$_FILES["aadharcard"]["name"];

$aadharno=$_POST["aadharno"];
$lctccertificate=$_POST["lctccertificate"];

$uploadlctc=$_POST["uploadlctc"];
move_uploaded_file($_FILES["uploadlctc"]["tmp_name"],"upload/".$_FILES["uploadlctc"]["name"]);
$uploadlctc=$_FILES["uploadlctc"]["name"];

$migrationcertificate=$_POST["migrationcertificate"];

$uploadmigration=$_POST["uploadmigration"];
move_uploaded_file($_FILES["uploadmigration"]["tmp_name"],"upload/".$_FILES["uploadmigration"]["name"]);
$uploadmigration=$_FILES["uploadmigration"]["name"];

$studentphoto=$_POST["studentphoto"];
move_uploaded_file($_FILES["studentphoto"]["tmp_name"],"upload/".$_FILES["studentphoto"]["name"]);
$studentphoto=$_FILES["studentphoto"]["name"];

$studentsignature=$_POST["studentsignature"];
move_uploaded_file($_FILES["studentsignature"]["tmp_name"],"upload/".$_FILES["studentsignature"]["name"]);
$studentsignature=$_FILES["studentsignature"]["name"];




$r=mysqli_query($con,"insert into ug(email,prnno,academicyear,degreelevel,programcourse,studentname,mothername,nationality,othernationality,gender,domicile,dob,placeofbirth,domicilecertificate,reservecategory,castcategory,creamylayer,physicallyhadicap,previousexam,stateboard,stateboardname,centralboardname,nameofschool,cityofschool,stateofschool,hsc12thmarksheet,examseatno12th,12thhscstream,mypassing,marksobtained,marksoutoff,percentage,grade,personalemail,studentmobileno,permanentadr,tehsil,district,state,pincode,educationalgap,lastexam,examseatno,monthofpassing,yearofpassing,lastexampercentage,lastexamgrade,minority,typeofminority,defensepersonal,defenserank,wardofmit,alumnistudentmit,ssc10thmarksheet,aadharcardimage,aadharnumber,lctc,uploadlctc,migration,uploadmigration,studentphoto,studentsignature)values('$emails','$prnno','$academicyear','$degreelevel','$ugpgprogram','$studentname','$mothername','$nationality','$othernationality','$gender','$domicile','$dob','$placeofbirth','$domicilebirthcertificate','$reservecategory','$castcategory','$creamylayer','$handicap','$previousexam','$stateboard','$boardstate','$centralboard','$school','$cityschool','$statecollegeschool','$HSC12thmarksheet','$examseatno12th','$HSC12thStream','$myofpassing','$marksobtained12th','$marksoutoff12th','$percentage12th','$grade12th','$studentemail','$studentmobileno','$permanentaddress','$tehsil','$district','$studentstate','$pincode','$educationalgap','$lastexamname','$lastexamseatno','$educationalgapexammonthofpassing','$educationalgapexamyearofpassing','$educationalgapexampercentage','$educationalgapexamgrade','$minority','$typeofminority','$wardofdefensepersonal','$defensepersonalrank','$wardofmitwpu','$alumniofmitwpu','$ssc10thmarksheet','$aadharcard','$aadharno','$lctccertificate','$uploadlctc','$migrationcertificate','$uploadmigration','$studentphoto','$studentsignature')");

if($r)
{
header("location:index.php");
}
else{
    echo mysqli_error($con);
}
?>