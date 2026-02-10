<?php
include "../api/db.php";
$table = ${ucfirst($_GET["do"])};
$table->del($_POST);
header("location:../back.php?do=" . $_GET["do"]); 
?>