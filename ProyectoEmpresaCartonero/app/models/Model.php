<?php

class Model{
    protected $db;

    function __construct() {
        $this->db = $this->connect();
    }

    private function connect(){
        $db = new PDO('mysql:host=localhost;'.'dbname=db_reci_coop;charset=utf8', 'root', '');
        return $db;
    }
}