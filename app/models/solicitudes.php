<?php
require_once __DIR__ . '/../models/conexiondb.php';
//require_once("app/models/conexiondb.php");

class Solicitud{
    protected $db;
    public $idpastor;
    public $idportafolio;
    public $fecha_solicitud;
    public $estado;

    public function __construct() {
        $this->db = Conexiondb::getInstance();
    }

    public function store($solicitud) {
        $query = "INSERT INTO solicitud (idsolicitud, idpastor, idportafolio, fecha_solicitud, estado)
                  VALUES (:idsolicitud, :idpastor, :idportafolio, :fecha_solicitud, :estado)";

        $statement = $this->db->prepare($query);
        $statement->execute([
            ':idsolicitud' => $solicitud->idsolicitud,
            ':idpastor' => $solicitud->idpastor,
            ':idportafolio' => $solicitud->idportafolio,
            ':fecha_solicitud' => $solicitud->fecha_solicitud,
            ':estado' => $solicitud->estado
        ]);
        return $this->db->lastInsertId();
    }    
}