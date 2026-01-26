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

    public function update($row)
    {
        $sql = "UPDATE `$this->table` 
                SET 
                    `text` = '{$row['text']}',
                    `img` = '{$row['img']}',
                    `thumb` = '{$row['thumb']}',
                    `sh` = '{$row['sh']}'
                WHERE
                    `id` = {$row['id']}";

        return $this->pdo->exec($sql);
    }
}

$Carousel1 = new DB("carousel1");
?>