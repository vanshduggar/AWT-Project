<?php

$egap=$_POST["egap"];

if($egap=="Yes")
{
  echo '<td colspan="2">
  <table class="table table-bordered">   <tr>
                   <td>Last Exam / Program Name</td>
                   <td>
                   <input type="text" value="" name="lastexamname" required class="form-control">
                   </td>
               </tr>
               <tr>
                   <td>Exam Seat No.</td>
                   <td>
                   <input type="text" value="" name="lastexamseatno" required class="form-control">
                   </td>
               </tr>
               <tr>
                   <td>Month of Passing</td>
                   <td>
                   <select name="educationalgapexammonthofpassing" required class="form-control">
    <option  value="" selected>Choose</option>
    <option name="January" value="January">January</option>
    <option name="February" value="February">February</option>
    <option name="March" value="March">March</option>
    <option name="April" value="April">April</option>
      <option name="May" value="May">May</option>
    <option name="June" value="June">June</option>
    <option name="July" value="July">July</option>
    <option name="August" value="August">August</option>
      <option name="September" value="September">September</option>
    <option name="October" value="October">October</option>
    <option name="November" value="November">November</option>
    <option name="December" value="December">December</option>
  </select>
                   </td>
               </tr>
               <tr>
                   <td>Year of Passing
                   </td>
                   <td>
                       <input type="date" value="" name="educationalgapexamyearofpassing" required class="form-control">
                   </td>
               </tr>
               <tr>
                   <td>Percentage(%)
                   </td>
                   <td>
                       <input type="text" value="" name="educationalgapexampercentage" required class="form-control">
                   </td>
               </tr>
               <tr>
               <td>Grade</td>
               <td>
                   <select name="educationalgapexamgrade" id="" required class="form-control">
                       <option value="" selected>Choose</option>
                       <option value="First Class and Distinction">First Class and Distinction</option>
                       <option value="First Class">First Class</option>
                       <option value="Second Class">Second Class</option>
                       <option value="Third Class">Third Class</option>
                   </select>
               </td>
              </tr></table>
  </td>';
}
else
{
    echo '<td colspan="2">
    <table class="table table-bordered">   <tr>
                     <td>Last Exam / Program Name</td>
                     <td>
                     <input type="text" value="" name="lastexamname" required class="form-control" disabled>
                     </td>
                 </tr>
                 <tr>
                     <td>Exam Seat No.</td>
                     <td>
                     <input type="text" value="" name="lastexamname" required class="form-control" disabled>
                     </td>
                 </tr>
                 <tr>
                     <td>Month of Passing</td>
                     <td>
                     <select name="educationalgapexammonthofpassing" required class="form-control" disabled>
      <option  value="" selected>Choose</option>
      <option name="January" value="January">January</option>
      <option name="February" value="February">February</option>
      <option name="March" value="March">March</option>
      <option name="April" value="April">April</option>
        <option name="May" value="May">May</option>
      <option name="June" value="June">June</option>
      <option name="July" value="July">July</option>
      <option name="August" value="August">August</option>
        <option name="September" value="September">September</option>
      <option name="October" value="October">October</option>
      <option name="November" value="November">November</option>
      <option name="December" value="December">December</option>
    </select>
                     </td>
                 </tr>
                 <tr>
                     <td>Year of Passing
                     </td>
                     <td>
                         <input type="date" value="" name="educationalgapexamyearofpassing" required class="form-control" disabled>
                     </td>
                 </tr>
                 <tr>
                     <td>Percentage(%)
                     </td>
                     <td>
                         <input type="text" value="" name="educationalgapexampercentage" required class="form-control" disabled>
                     </td>
                 </tr>
                 <tr>
                 <td>Grade</td>
                 <td>
                     <select name="educationalgapexamgrade" id="" required class="form-control" disabled>
                         <option value="" selected>Choose</option>
                         <option value="First Class and Distinction">First Class and Distinction</option>
                         <option value="First Class">First Class</option>
                         <option value="Second Class">Second Class</option>
                         <option value="Third Class">Third Class</option>
                     </select>
                 </td>
                </tr></table>
    </td>';
}

?>