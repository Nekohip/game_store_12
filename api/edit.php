<?php
include "../api/db.php";
$table = ${ucfirst($_GET["do"])};
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

if($_GET['do'] == "nav")
{
    foreach($_POST as &$row)
    {   
        //修改選單時二維
        if(is_array($row))
        {
            $row["sh"] = isset($row["sh"]) ? 1 : 0;
            if(!empty($row["id"]))
            {
                $table->update($row);
                // 檢查用
                // $sql = $table->update($row);
                // echo $sql;
            }
            else
            {
                $table->insert($row);
                // // 檢查用
                // $sql = $table->insert($row);
                // echo $sql;
            } 
        }
        //新增選單時是一維
        else
        {
            $table->insert($_POST);
            break;
        }
    }
}
else
{
    $_POST["sh"] = isset($_POST["sh"]) ? 1 : 0;
    if(!empty($_POST["id"]))
    {
        // $table->update($_POST);
        //檢查用
        $sql = $table->update($_POST);
        echo $sql;
    }
    else
    {
        // $table->insert($_POST);
        $sql = $table->insert($_POST);
        echo $sql;
    }   
}
header("location:../back.php?do=" . $_GET["do"]);
?>