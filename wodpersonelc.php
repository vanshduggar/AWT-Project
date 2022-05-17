<?php

$wodp=$_POST["wodp"];

if($wodp=="Yes")
{
    echo "<td><br><br>Select Ranks</td>
    <td>
    <input type='radio' name='defensepersonalrank' value='NCO - Non- Commissioned Officer' required>NCO - Non- Commissioned Officer <br><br>
<input type='radio' name='defensepersonalrank' value='JCO - Junior Commissioned Officer' required>JCO - Junior Commissioned Officer <br><br>
<input type='radio' name='defensepersonalrank' value='SCO - Senior Commissioned Officer' required>SCO - Senior Commissioned Officer
    </td>";
}
else
{
    echo "<td><br><br>Select Ranks</td>
    <td>
    <input type='radio' name='defensepersonalrank' value='NCO - Non- Commissioned Officer' disabled>NCO - Non- Commissioned Officer <br><br>
<input type='radio' name='defensepersonalrank' value='JCO - Junior Commissioned Officer' disabled>JCO - Junior Commissioned Officer <br><br>
<input type='radio' name='defensepersonalrank' value='SCO - Senior Commissioned Officer' disabled>SCO - Senior Commissioned Officer
    </td>";
}



?>