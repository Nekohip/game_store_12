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

    public function array_to_sql($rows)
    {
        if(empty($rows["img"]))
        {
            unset($rows["img"]);
        }

        if(empty($rows["thumb"]))
        {
            unset($rows["thumb"]);
        }

        foreach($rows as $key => $value)
        {
            $tmp[]="`$key`='$value'";
        }
        
        return $tmp;
    }

    public function update($rows)
    {
        $sql = "UPDATE `$this->table` SET ";
        $tmp = $this->array_to_sql($rows);
        $sql .= join(", ", $tmp) . " WHERE `id` = {$rows['id']}";
        
        // 檢查用
        // return $sql;
        return $this->pdo->exec($sql);

    }
}

$Carousel = new DB("carousel");
?>