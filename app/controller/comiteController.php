<?php
require_once __DIR__ . '/../models/comites.php';
//require_once("app/models/comites.php"); //ruta
require_once __DIR__ . '/../models/solicitudes.php';
//require_once("app/models/solicitudes.php");

class comiteController{
    private $model;
    public function __construct(){
        $this->model = new Comites();
    }

    static function index(){
        $conexion = new Comites();
        
        $data = $conexion->index();
        $dataportafolio = $conexion->portafolio(); 
        require_once("app/views/hacersolicitud.php");
    }

    public static function crearSolicitud() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
            $solicitud = new Solicitud();
            $solicitud->idportafolio = $_POST['idportafolio'];  // Recoger valores
            $solicitud->fecha_solicitud = date('Y-m-d');
            $solicitud->estado = 'pendiente';
    
            $data = $solicitud->store($solicitud);  // Guardar en la base de datos
    
            // Asegúrate de que esta ruta sea correcta y el archivo exista
            require_once('app/views/solicitud.php');
            exit();  // Asegúrate de que no siga ejecutando el resto del código
        }
    }


}