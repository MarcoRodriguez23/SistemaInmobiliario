<?php
// require __DIR__ . '/../vendor/autoload.php';
require '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
require 'funciones.php';
require 'config/database.php';


//conectar a la base de datos
$db = conectarDB();

use Model\activeRecord;

require_once '../models/ActiveRecord.php';

activeRecord::setDB($db);