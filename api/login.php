<?php
include "db.php";
if($Member->count($_POST))
{
    $row = $Member->find($_POST);
    $_SESSION["mem"] = $row["name"];
    if($_SESSION["mem"] == "admin")
    {
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