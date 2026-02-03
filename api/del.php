<?php
include "../api/db.php";
if($_GET["do"] == "carousel")
{
    $Carousel->del($_POST);
    header("location:../back.php?do=carousel"); 
}
    

if($_GET["do"] == "boxes")
{
    $Boxes->del($_POST);
    header("location:../back.php?do=boxes"); 
}
    


?>