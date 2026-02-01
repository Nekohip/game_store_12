<?php
include "../api/db.php";
$Carousel->del($_POST);
header("location:../back.php?do=carousel");
?>