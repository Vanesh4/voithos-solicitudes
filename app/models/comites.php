<?php

require_once("app/models/conexiondb.php");

class Comites{
    protected $db;

    public function __construct() {
        $this->db = Conexiondb::getInstance();
    }

    public function index() {
        // $query = "select * from comite";
        // $ans = $this->db->query($query);
        // return $ans;
        $query = "SELECT * FROM comite";
        $statement = $this->db->query($query);
        $data = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function ejemplo() {
        // $query = "select * from comite";
        // $ans = $this->db->query($query);
        // return $ans;
        $query = "SELECT * FROM portafolio";
        $statement = $this->db->query($query);
        $dataportafolio = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $dataportafolio;
    }

    public function store($data) {
        $query = "insert into comite values();";
        $ans = $this->db->query($query);
        return $ans;
    }

    public function show($id) {
        if ($this->db) {
            $stmt = $this->db->prepare("select * from comite where idcomite = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            throw new Exception("Database connection not established.");
        }
    }
}