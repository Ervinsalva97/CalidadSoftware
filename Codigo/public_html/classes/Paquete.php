<?php 

namespace App;

class Paquete extends ActiveRecord {

    protected static $columnasDB = ['id','codpaquete','contenido','precio','cantidad','categoria','descuento'];
    protected static $tabla = 'paquetes';

    public $id;
    public $codpaquete;
    public $contenido;
    public $precio;
    public $cantidad;
    public $categoria;
    public $descuento;
    
    public function __construct($args=[]){
        $this->id = $args['id'] ?? null;
        $this->codpaquete = $args['codpaquete'] ?? null;
        $this->contenido = $args['contenido'] ?? null;
        $this->precio = $args['precio'] ?? null;
        $this->cantidad = $args['cantidad'] ?? null;
        $this->categoria = $args['categoria'] ?? null;
        $this->descuento = $args['descuento'] ?? 0.00;
    }

    public function erroresForm(){
        if(!$this->codpaquete){
            self::$errores[] ="Código de paquete obligatorio";
        }
        if(!$this->contenido){
            self::$errores[] ="Contenido obligatorio";
        }
        if(!$this->precio){
            self::$errores[] ="Precio obligatorio";
        }
        if(!$this->cantidad){
            self::$errores[] ="Cantidad obligatorio";
        }
        if(!$this->categoria){
            self::$errores[] ="Categoria obligatorio";
        }
        return self::$errores;
    }

}