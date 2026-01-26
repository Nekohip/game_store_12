<?php
include "../api/db.php";
$rows = $Carousel1->all();

if(!empty($_FILES))
{
    move_uploaded_file($_FILES["img"]["tmp_name"], "../upload/".$_FILES["img"]["name"]);
    $_POST["img"] = $_FILES["img"]["name"];

    move_uploaded_file($_FILES["thumb"]["tmp_name"], "../upload/".$_FILES["thumb"]["name"]);
    $_POST["thumb"]  = $_FILES["thumb"]["name"];
}

$_POST["sh"] = isset($_POST["sh"]) ? 1 : 0;

$Carousel1->update($_POST);

header("location:../back.php?do=carousel1")
?>
<pre>
    <?php print_r($_POST) ?>
</pre>
<!-- $Carousel1->update($_POST); -->