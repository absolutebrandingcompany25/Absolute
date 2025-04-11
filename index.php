<?php
require_once 'core/configgeneral_org.php';
require_once './controller/controlvista.php';

$plantilla = new controlvista();
$plantilla->obtener_plantilla_control();
