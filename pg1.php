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

$ugcourseprogram=$_POST["ugcourseprogram"];
$Streamglevel=$_POST["Streamglevel"];
$nameofcollege=$_POST["nameofcollege"];
$nameofuniversity=$_POST["nameofuniversity"];
$cityofpreviouscollege=$_POST["cityofpreviouscollege"];
$stateofpreviouscollege=$_POST["stateofpreviouscollege"];

$graduationmarksheet=$_POST["graduationmarksheet"];
move_uploaded_file($_FILES["graduationmarksheet"]["tmp_name"],"upload/".$_FILES["graduationmarksheet"]["name"]);
$graduationmarksheet=$_FILES["graduationmarksheet"]["name"];

$gexamseatno=$_POST["gexamseatno"];
$graduationstream=$_POST["graduationstream"];
$myofpassing=$_POST["myofpassing"];
$gpercentage=$_POST["gpercentage"];
$gradeclass=$_POST["gradeclass"];

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


$r=mysqli_query($con,"insert into pg(email,prnno,academicyear,degreelevel,programcourse,studentname,mothername,nationality,othernationality,gender,domicile,dob,placeofbirth,domicilecertificate,reservecategory,castcategory,creamylayer,physicallyhadicap,previousexam,ugcourseprogram,streamglevel,nameofcollege,nameofuniversity,cityofprecollege,stateofprecollege,gmarksheet,gexamseatno,gstream,myofpassing,gpercentage,gradeclass,personalemail,studentmobileno,permanentadr,tehsil,district,state,pincode,educationalgap,lastexam,examseatno,monthofpassing,yearofpassing,lastexampercentage,lastexamgrade,minority,typeofminority,defensepersonal,defenserank,wardofmit,alumnistudentmit,ssc10thmarksheet,aadharcardimage,aadharnumber,lctc,uploadlctc,migration,uploadmigration,studentphoto,studentsignature)values('$emails','$prnno','$academicyear','$degreelevel','$ugpgprogram','$studentname','$mothername','$nationality','$othernationality','$gender','$domicile','$dob','$placeofbirth','$domicilebirthcertificate','$reservecategory','$castcategory','$creamylayer','$handicap','$previousexam','$ugcourseprogram','$Streamglevel','$nameofcollege','$nameofuniversity','$cityofpreviouscollege','$stateofpreviouscollege','$graduationmarksheet','$gexamseatno','$graduationstream','$myofpassing','$gpercentage','$gradeclass','$studentemail','$studentmobileno','$permanentaddress','$tehsil','$district','$studentstate','$pincode','$educationalgap','$lastexamname','$lastexamseatno','$educationalgapexammonthofpassing','$educationalgapexamyearofpassing','$educationalgapexampercentage','$educationalgapexamgrade','$minority','$typeofminority','$wardofdefensepersonal','$defensepersonalrank','$wardofmitwpu','$alumniofmitwpu','$ssc10thmarksheet','$aadharcard','$aadharno','$lctccertificate','$uploadlctc','$migrationcertificate','$uploadmigration','$studentphoto','$studentsignature')");

if($r)
{
header("location:index.php");
}
else{
    echo mysqli_error($con);
}
?>