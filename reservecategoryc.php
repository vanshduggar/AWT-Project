<?php

$rc=$_POST["rc"];

if($rc=="OPEN / General" || $rc=="SC" || $rc=="ST")
{
  echo ' <td colspan="2">
    <table class="table table-bordered">
    <tr>
        <td>
        Cast / Category Certificate
        </td>
        <td><input type="file" name="castcategory" class="form-control" required disabled></td>
    </tr>
    <tr>
    <td>
    Do you belong to the creamy layer of VJ, DT(A), NT (B), NT(C), NT (D), SBC and OBC? (Only for MS Students)
    </td>
    <td>
        <select name="creamylayer" id="" class="form-control" required disabled>
            <option value="">Choose</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </td>
    </tr>
    </table>
     </td>';
}
else
{
    echo ' <td colspan="2">
    <table class="table table-bordered">
    <tr>
        <td>
        Cast / Category Certificate
        </td>
        <td><input type="file" name="castcategory" class="form-control" required></td>
    </tr>
    <tr>
    <td>
    Do you belong to the creamy layer of VJ, DT(A), NT (B), NT(C), NT (D), SBC and OBC? (Only for MS Students)
    </td>
    <td>
        <select name="creamylayer" id="" class="form-control" required>
            <option value="">Choose</option>
            <option value="Yes">Yes</option>
            <option value="No">No</option>
        </select>
    </td>
    </tr>
    </table>
     </td>';
}

?>