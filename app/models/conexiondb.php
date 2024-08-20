<?php
class Conexiondb{
    private static $instance = null;
    private $db;

    private function __construct() {
        $config = require 'config/config.php';
        $host = $config['host'];
        $dbname = $config['dbname'];
        $username = $config['username'];
        $password = $config['password'];
        

        try {
            $this->db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Conexiondb();
        }
        return self::$instance->db;
    }

    public static function hellow() {
        echo 'hellllllllllllooooou!';
    }

}
