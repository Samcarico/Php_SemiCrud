<?php

class Persona implements JsonSerializable{
    private $name;
    private $apellido;
    private $cedula;
    private $edad;

    public function __construct($name, $apellido, $cedula, $edad){
        $this->name = $name;
        $this->apellido = $apellido;
        $this->cedula = $cedula;
        $this->edad = $edad;
    }

    public function jsonSerialize(){
        return get_object_vars($this);
    }
}