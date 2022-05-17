<?php

$nl=$_POST["nl"];

if($nl=="INDIAN")
{
    echo '
    <input type="text" name="othernationality" value="" required class="form-control" placeholder="Your answer" disabled>
    ';
}
else
{
    echo '<input type="text" name="othernationality" value="" required class="form-control" placeholder="Your answer">';
}

?>