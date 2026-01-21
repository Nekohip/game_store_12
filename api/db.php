<?php


Class DB 
{
    private $dsn = "mysql : host = localhost; 
                    dbname=game_store_12_db ;
                    charset = utf8";
    private $table;
    private $pdo;
    public function __construct($tb)
    {
        $this -> pdo = new PDO($this->dsn, "root", "");
        $this -> table = $tb;
    }


}
?>