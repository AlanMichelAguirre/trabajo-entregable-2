<?php
class Empresa{
    /**
     * Se registra la siguiente información: 
     * identificación, nombre y la colección de Viajes 
     * que realiza.
     */
    private $identificacion;
    private $nombre;
    private $viaje;

    public function __construct($identificacion,$nombre,$viaje){
        $this->identificacion=$identificacion;
        $this->nombre=$nombre;
        $this->viaje=$viaje;
    }
    public function getIdentificacion(){
        return $this->identificacion;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getViaje(){
        return $this->viaje;
    }

    public function setIdentificacion($identificacion){
        $this->identificacion=$identificacion;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setViaje($viaje){
        $this->viaje=$viaje;
    }
    public function __toString(){
        return "Identificacion: ".$this->getIdentificacion()."\nNombre: ".$this->getNombre().
        "Viaje: ".$this->getViaje();
    }
/**
* Implementar el método darViajeADestino($elDestino) 
* que recibe por parámetro un
* destino junto a una cantidad de asientos y retorna 
* una colección con todos los viajes
* disponibles a ese destino.
     */
    public function darViajeADestino($elDestino){
        $dato="";
        for($i=0;$i<count($elDestino['destino']);$i++){
            $dato=$dato."Destino: ".$elDestino['destino'][$i]."\nCant: ".$elDestino['cantAsientos'][$i]."\n";
        }
        return $dato;
    }
    /**
     * Implementar el método incorporarViaje($objViaje) 
     * que recibe como parámetro un viaje,
*verifica que no se encuentre registrado ningún otro 
*viaje al mismo destino, en la misma
*fecha y con el mismo horario de partida. El método
* retorna verdadero si la incorporación
*del viaje se realizó correctamente y falso en caso 
*contrario.
     */
    public function incorporarViaje($objViaje){
        $destino=$objViaje->getDestino();
        $fecha=$objViaje->getfecha();
        $horarioPartida=$objViaje->getHoraPartida();
        
    }

/**
* Implementar el método venderViajeADestino
*($canAsientos, $destino, $fecha) método que
*recibe por parámetro la cantidad de asientos, el 
*destino, una fecha y se registra la
*asignación del viaje en caso de ser posible. (invocar 
*al método
*asignarAsientosDisponibles). El método retorna la 
*instancia del viaje asignado o null
*en caso contrario.
     */
    public function venderViajeADestino($canAsientos, $destino, $fecha){
        $viaje=$this->getViaje();
        $viajeAsignado=null;
        $encontro=false;
        $i=0;
        while($i<$viaje && !$encontro){
            $unViaje=$viaje[$i];
            if($unViaje->getDestino()==$destino && $unViaje->getFecha()==$fecha){
                $hayLugar=$unViaje->asignarAsientosDisponibles($canAsientos);
                if($hayLugar){
                    $viajeAsignado=$unViaje;
                    $encontro=true;
                }
            }
            $i++;
        }
        return $viajeAsignado;
    }

/**
* Implementar el método montoRecaudado que 
* retorna el monto recaudado por la
*Empresa. (tener en cuenta los asientos vendidos y 
*el importe del viaje)
     */
    public function montoRecaudado(){
        $totalRecudado=0;
        $viaje=$this->getViaje();
        $cantViajes=count($viaje);
        for($i=0;$i<$cantViajes;$i++){
            $unViaje=$viaje[$i];
            $totalRecudado=$totalRecudado+$viaje->getImporte()*($viaje->getCantAsientos()-$viaje->setCantAsientosDisponible());        
        }
        return $totalRecudado;
    }
}