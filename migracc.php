<?php

$migrac=$_POST["migrac"];

if($migrac=="Yes")
{
   echo '<input type="file" name="uploadmigration" value="" required class="form-control">';
}
else
{
    echo '<input type="file" name="uploadmigration" value="" required class="form-control" disabled>';
}

?>