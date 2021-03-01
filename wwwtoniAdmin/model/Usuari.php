<?php

class Usuari{

    public $id;
    public $nom;
    public $cognom;
    public $email;
    public $tipo;
    public $fecha;

    function __construct() {
        
    }

    function get_id(){
        return $this->id;
    }

    function set_id($id){
        $this->id = $id;
    }

    function get_nom(){
        return $this->nom;
    }

    function set_nom($nom){
        $this->nom = $nom;
    }

    function get_cognom(){
        return $this->cognom;
    }

    function set_cognom($cognom){
        $this->cognom = $cognom;
    }

    function get_email(){
        return $this->email;
    }

    function set_email($email){
        $this->email = $email;
    }

    function get_tipo(){
        return $this->tipo;
    }

    function set_tipo($tipo){
        $this->tipo = $tipo;
    }

    function get_fecha(){
        return $this->fecha;
    }

    function set_fecha($fecha){
        $this->fecha = $fecha;
    }
}

?>