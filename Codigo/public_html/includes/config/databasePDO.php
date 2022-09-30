<?php 
$servidor = "mysql:dbname=id16793435_turismo;host=localhost";

try{
    $pdo = new PDO($servidor,'id16793435_root','FTU_bLe0T4$VB3}<',array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    
}catch(PDOException $e){
    echo "<script>alert('Error...')</script>" ;
}
