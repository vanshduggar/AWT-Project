<?php

$lctc=$_POST["lctc"];

if($lctc=="Yes")
{
   echo ' <input type="file" name="uploadlctc" value="" required class="form-control">';
}
else
{
    echo ' <input type="file" name="uploadlctc" value="" required class="form-control" disabled>';
}

?>