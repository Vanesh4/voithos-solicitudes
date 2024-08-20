<?php
require_once("app/models/comites.php"); //ruta

class comiteController{
    private $model;
    public function __construct(){
        $this->model = new Comites();
    }

    static function index(){
        $conexion = new Comites();
        
        $data = $conexion->index();
        $dataportafolio = $conexion->ejemplo(); 
        require_once("app/views/hacersolicitud.php");
    }

}