<?php

class Model
{
    private $db;
    public $sql = '';
    public $params = [];

    public function __construct()
    {
        $this->db = new PDO(DB . ':host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USERNAME, DB_PASSWORD);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function query()
    {
        $stmt = $this->db->prepare($this->sql);

        $stmt->execute($this->params);

        return $stmt;
    }
}
