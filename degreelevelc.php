<?php

$dl=$_POST["dl"];


if($dl=="UG(Under Graduate-After 12/HSC)" || $dl=="Diploma(Diploma in Photography)")
{
	echo "<select name='ugpgprogram' id='ugpgprogram1' class='form-control'>
	
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
<option value='B.Sc. Hospitality and Hotel Administration'>B.Sc. Hospitality and Hotel Administration</option></select>";
}
else
{
	echo "
	<select name='ugpgprogram' id='ugpgprogram1' class='form-control'>    
	<option value='' selected>Choose</option>
	<option value='MA English/ Political Science/ Psychology with emphasis on Liberal Studies'>MA English/ Political Science/ Psychology with emphasis on Liberal Studies</option>
	<option value='MFA Applied Arts with Emphasis on Research'>MFA Applied Arts with Emphasis on Research</option>
	<option value='MA Journalism and Mass Communication'>MA Journalism and Mass Communication</option>
	<option value='M.Com.'>M.Com.</option>
	<option value='M.Sc. Economics'>M.Sc. Economics</option>
	<option value='M.Sc. Data Science & Big Data Analytics'>M.Sc. Data Science & Big Data Analytics</option>
	<option value='MCA Science'>MCA Science</option>
	<option value='M.Sc. Mathematics'>M.Sc. Mathematics</option>
	<option value='M.Sc. Statistics'>M.Sc. Statistics</option>
	<option value='M.Sc. Physics Photonics'>M.Sc. Physics Photonics</option>
	<option value='M.Sc. Biotechnology'>M.Sc. Biotechnology</option>
	<option value='M.Sc. Industrial Polymer Chemistry'>M.Sc. Industrial Polymer Chemistry</option>
	<option value='M.Ed.'>M.Ed.</option>
	<?php 
		}
	?>
	 </select> ";
}

?>