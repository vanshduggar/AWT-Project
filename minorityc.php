<?php

$mino=$_POST["mino"];

if($mino=="Yes")
{
 echo ' <select name="typeofminority" id="" required class="form-control">
 <option value="" selected>Choose</option>
      <option value="Linguistic">Linguistic</option>
      <option value="Religious">Religious</option>
 </select>';
}
else
{
    echo ' <select name="typeofminority" id="" required class="form-control" disabled>
    <option value="" selected>Choose</option>
         <option value="Linguistic">Linguistic</option>
         <option value="Religious">Religious</option>
    </select>';
}
?>