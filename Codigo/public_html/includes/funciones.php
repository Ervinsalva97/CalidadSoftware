<?php
define('INCLUIR_TEMPLATES',__DIR__.'/templates');
define('CARPETA_IMAGENES',__DIR__.'/../imagenes/');

//SANDBOX
//define("LINKAPI","https://api.sandbox.paypal.com");
//define("CLIENTID","Ad210rhCei-ENgj6wZWSkFtY2SQukkKqQleTvt1gNjHhcI2zjcif91kojMKgyhXlkxEK342uiT9-2QX_");
//define("SECRET","EJ7uR0gF-IoHv4ZM6irJWc0U4Jrrh_poko3NRQjAzSt4H8FaTKixIh2NmCWgFToJ5aaJkJPlw0rFACfr");

//LIVE
define("LINKAPI","https://api.paypal.com");
define("CLIENTID","AQd4wMJP2MVhIplG7MjMQg6-_NeFZvGaTPowIKRKyCvQCQACqlQVgRRqyD0el847LaEFLCqakBOa8NJb");
define("SECRET","EF_IX3u--kexnGWGL8NBz8Rjc8Kbb8-cXsPQC3W_VNQ-qPiK4O0RCgf2BNRc4C1Xa7OuQ2rNwF94wArJ");

function templates($nombre){
    include INCLUIR_TEMPLATES."/${nombre}.php";
}


function debuguear($html){
    echo '<pre>';
    var_dump($html);
    echo '</pre>';
}

//Sanitizar el HTML
function s($html){
    $s = htmlspecialchars($html);
    return $s;
}

function estaAutenticado(){
    session_start();

    if(empty($_SESSION['login'])){
        header('location: /404.php');
    }
}

function redireccionar($r){
    header("location: /admin/$r.php");
}