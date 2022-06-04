<?php

require_once 'modelo/mascota.php';
require_once 'modelo/duenioMascota.php';

$dm = new Duenio();
$dm->Id = 123456;
$dm->Nombre = 'Agustin';
$dm->Apellido = 'Vargas';
$dm->Documento = '36734474';
$dm->Celular = '3416966972';
$dm->Direccion = 'Los Senecios 350';

$mascota = new Mascota();
$mascota->Id = 987456;
$mascota->Nombre = 'Firulais';
$mascota->Raza = 'Dalmata';
$mascota->Duenio = $dm;

$mascota->MostrarDatos();
