<?php
include "db.php";
if($Member->count($_POST))
{
    $row = $Member->find($_POST);
    $_SESSION["mem"] = $row["name"];
    if($row["admin"] == 1)
    {
        $_SESSION["admin"] = 1;
        header("location:../back.php");
    }
    else
    {
        header("location:../index.php");
    }
}
else 
{
    header("location:../front/login.php?error=1");
}
?>