<?php
include "db.php";
if($Member->count($_POST))
{
    $row = $Member->find($_POST);
    $_SESSION["mem"] = $row["name"];
    header("location:../index.php");
}
else 
{
    header("location:../front/login.php?error=1");
}
?>