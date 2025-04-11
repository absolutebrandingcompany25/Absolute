<?php
require_once 'core/configgeneral.php';
require_once './controller/controlvista.php';

$plantilla = new controlvista();
$plantilla->obtener_plantilla_control();
