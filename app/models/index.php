<?php
class Model{
    private $model;
    private $db;

    public function __construct() {
        $host = 'localhost:3307';
        $dbname = 'phpvoithos'; // Asegúrate de que este sea el nombre correcto de tu base de datos
        $username = 'vanesha'; // Cambia esto por tu usuario MySQL si es diferente
        $password = '0000'; // Cambia esto por tu contraseña MySQL si es diferente

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    // public function __construct() {
    //     $this->model = array();
    //     $this->$db = new PDO('mysql:host=localhost;dbname=phpvoithos',"vanesha","0000");
    // }

    public function add($tabla, $data) {
        $query = "insert into ".$tabla." values();";
        $ans = $this->db->query($query);
        return $ans;
    }

    public function get($table, $id) {
        if ($this->db) {
            $stmt = $this->db->prepare("SELECT * FROM $table WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            throw new Exception("Database connection not established.");
        }
    }
}