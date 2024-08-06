<?php
require_once("app/models/index.php"); //ruta

class modelController{
    private $model;
    public function __construct(){
        $this->model = new Model();
    }

    static function index(){
        $conexion = new Model();
        $data = $conexion->get("empleados","1");
        require_once("app/views/index.php");
    }
}