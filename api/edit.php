<?php
include "../api/db.php";
$rows = $Carousel->all();

if(!empty($_FILES))
{
    move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/".$_FILES["img"]["name"]);
    $_POST["img"] = $_FILES["img"]["name"];

    move_uploaded_file($_FILES["thumb"]["tmp_name"], "../upload/".$_FILES["thumb"]["name"]);
    $_POST["thumb"]  = $_FILES["thumb"]["name"];
}

$_POST["sh"] = isset($_POST["sh"]) ? 1 : 0;

if(!empty($_POST["id"]))
{
    $Carousel->update($_POST);
}
else
{
    $Carousel->insert($_POST);
}   
// 檢查用
// $sql = $Carousel->update($_POST);
// $sql = $Carousel->insert($_POST);
// echo $sql;
header("location:../back.php?do=carousel");
?>