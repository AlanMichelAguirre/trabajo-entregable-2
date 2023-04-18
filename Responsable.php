<?php
class Responsable{
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion;
    private $email;
    private $telefono;

    public function __construc($nombre,$apellido,$dni,$direccion,$email,$telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->dni=$dni;
        $this->direccion=$direccion;
        $this->email=$email;
        $this->telefono=$telefono;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDni(){
        return $this->dni;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    //---------SET------
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setDni($dni){
        $this->dni=$dni;
    }
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    }
    public function setEmail($email){
        $this->email=$email;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    public function __toString(){
        return "Nombre: ".$this->getNombre()."\nApellido: ".$this->getApellido()."\nDireccion: ".$this->getDireccion()."Email: ".$this->getEmail()."\nTelefono: ".$this->getTelefono();
    }
}