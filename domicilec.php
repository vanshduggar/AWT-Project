<?php

$domi=$_POST["domi"];

if($domi=="MS-(Maharashtra Domicile Student)")
{
    echo '
    <input type="file" name="domicilebirthcertificate" value="" required class="form-control">
    ';
}
else
{
    echo '
    <input type="file" name="domicilebirthcertificate" value="" required class="form-control" disabled>
    ';
}

?>