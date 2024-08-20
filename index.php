<h1>plantilla</h1>
<?php
require_once("config/config.php");
//llamar al controlador
require_once("app/controller/comiteController.php");

comiteController::index();
