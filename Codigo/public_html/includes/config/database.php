<?php 

function conectarDB(){
    $db = new mysqli('localhost','id16793435_root','FTU_bLe0T4$VB3}<','id16793435_turismo');
    if(!$db){
        echo 'Conexion no establecida';
    }
    return $db;
}