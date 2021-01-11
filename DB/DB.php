<?php

class DB{
    private $host;
    private $login;
    private $password;
    private $db;
    private $table;

    public function __construct($host, $login, $password, $db, $table){
        $this->host = $host;
        $this->login = $login;
        $this->password = $password;
        $this->db = $db;
        $this->table = $table;
    }
    public function getResum(){
        $mysqli = new mysqli($this->host, $this->login, $this->password, $this->db);
        $res = $mysqli->query("SELECT name, workyear, yearold, location, oldlocwork, date, photo, price FROM `{$this->table}` ORDER BY id DESC");
        $mysqli->close();
        return $res->fetch_all(MYSQLI_ASSOC);
    }
}

?>