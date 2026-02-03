<?php
include "../api/db.php";
$rows = $Carousel->all();

if(!empty($_FILES))
{
    if(!empty($_FILES["img"]))
    {
        move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/".$_FILES["img"]["name"]);
        $_POST["img"] = $_FILES["img"]["name"];
    }
        
    if(!empty($_FILES["thumb"]))
    {
        move_uploaded_file($_FILES["thumb"]["tmp_name"], "../upload/".$_FILES["thumb"]["name"]);
        $_POST["thumb"]  = $_FILES["thumb"]["name"];
    }    
}

$_POST["sh"] = isset($_POST["sh"]) ? 1 : 0;

if($_GET["do"] == "carousel")
{
    if(!empty($_POST["id"]))
    {
        $Carousel->update($_POST);
        //檢查用
        // $sql = $Carousel->update($_POST);
        // echo $sql;
    }
    else
    {
        $Carousel->insert($_POST);
        // $sql = $Carousel->insert($_POST);
        // echo $sql;
    }   
    header("location:../back.php?do=carousel");
}

if($_GET["do"] == "boxes")
{
    if(!empty($_POST["id"]))
    {
        $Boxes->update($_POST);
        // $sql = $Boxes->update($_POST);
        // echo $sql;
    }
    else
    {
        $Boxes->insert($_POST);
        // $sql = $Boxes->insert($_POST);
        // echo $sql;
    }
    header("location:../back.php?do=boxes");
}
?>