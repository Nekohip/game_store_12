<?php
Class DB 
{
    private $dsn = "mysql:host=localhost; 
                    dbname=game_store_12_db;
                    charset=utf8";
    private $table;
    private $pdo;
    public function __construct($tb)
    {
        $this->pdo = new PDO($this->dsn, "root", "");
        $this->table = $tb;
    }

    //取所有欄位
    public function all()
    {
        $sql = "SELECT * FROM `$this->table`";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function array_to_sql($row)
    {
        if(empty($row["img"]))
        {
            unset($row["img"]);
        }

        if(empty($row["thumb"]))
        {
            unset($row["thumb"]);
        }

        foreach($row as $key => $value)
        {
            $tmp[]="`$key`='$value'";
        }
        
        return $tmp;
    }

    public function update($row)
    {
        $sql = "UPDATE `$this->table` SET ";
        $tmp = $this->array_to_sql($row);
        $sql .= join(", ", $tmp) . " WHERE `id` = {$row['id']}";
        
        // 檢查用
        // return $sql;
        return $this->pdo->exec($sql);

    }

    public function insert($row)
    {
        $sql = "INSERT INTO `$this->table` (`";
        $keys = array_keys($row);
        $sql .= join("`, `", $keys) . "`) VALUES ('" . join("', '", $row) . "')";
        // 檢查用
        // return $sql;
        return $this->pdo->exec($sql);

    }

    public function del($row)
    {
        $sql = "DELETE FROM `$this->table` WHERE `id` = {$row['id']}";
        return $this->pdo->exec($sql);
    }
}

$Carousel = new DB("carousel");
$Boxes = new DB("boxes");
?>