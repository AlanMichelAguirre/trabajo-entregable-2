<?php
/*
Se registra la siguiente información: destino, hora de partida, hora de llegada, número,
importe, fecha, cantidad de asientos totales, cantidad de asientos disponibles, y una
referencia a la persona responsable del viaje.
*/
class Viaje{
	private $destino;
	private $horaPartida;
	private $horaLlegada;
	private $numero;
	private $importe;
	private $fecha;
	private $cantAsientos;
	private $cantAsientosDisponibles;
	private $trabajador;
	
	public function __construct($destino,$horaPartida,$horaLlegada,$numero,$importe,$fecha,$cantAsientos,$cantAsientosDisponibles,$objResponsable){
		$this->destino=$destino;
		$this->horaPartida=$horaPartida;
		$this->horaLlegada=$horaLlegada;
		$this->numero=$numero;
		$this->importe=$importe;
		$this->fecha=$fecha;
		$this->cantAsientos=$cantAsientos;
		$this->cantAsientosDisponibles=$cantAsientosDisponibles;
		$this->objResponsable=$objResponsable;
	}
	
	public function getDestino(){
		return $this->destino;
	}
	public function getHoraPartida(){
		return $this->horaPartida;
	}
	public function getHoraLlegada(){
		return $this->horaLlegada;
	}
	public function getNumero(){
		return $this->numero;
	}
	public function getImporte(){
		return $this->importe;
	}
	public function getFecha(){
		return $this->fecha;
	}
	public function getCantAsientos(){
		return $this->cantAsientos;
	}
	public function getCantAsientosDisponible(){
		return $this->cantAsientosDisponibles;
	}
	public function getResponsable(){
		return $this->objResponsable;
	}
	//--------------------------set-------------------
	public function setDestino($destino){
		$this->destino=$destino;
	}
	public function setHoraPartida($horaPartida){
		$this->horaPartida=$horaPartida;
	}
	public function setHoraLlegada($horaLlegada){
		$this->horaLlegada=$horaLlegada;
	}
	public function setNumero($numero){
		$this->numero=$numero;
	}
	public function setImporte($importe){
		$this->importe=$importe;
	}
	public function setFecha($fecha){
		$this->fecha=$fecha;
	}
	public function setCantAsientos($cantAsientos){
		$this->cantAsientos=$cantAsientos;
	}
	public function setCantAsientosDisponible($cantAsientosDisponibles){
		$this->cantAsientosDisponibles=$cantAsientosDisponibles;
	}
	public function setResponsable($objResponsable){
		$this->objResponsable=$objResponsable;
	}
	public function __toString(){
		return "Destino: ".$this->getDestino()."\nHora de Partida: ".$this->getHoraPartida()."\nHora de llegada: ".$this->getHoraLlegada().
		"\nNumero: ".$this->getNumero()."\nImporte: ".$this->getImporte()."\nFecha: ".$this->getFecha()."\nCantidad de Asientos: ".$this->getCantAsientos().
		"\nCantidad de asientos disponibles: ".$this->getCantAsientosDisponible()."\nReponsable: ".$this->getResponsable()."\n";
	}
/**
 * Implementar el método asignarAsientosDisponibles
 * ($catAsientos) que recibe por
 * parámetros la cantidad de asientos que desean 
 * asignarse. El método retorna
 * verdadero en caso que la asignación pueda concretarse 
 * y falso en caso contrario.
 */
	public function asignarAsientosDisponibles($cantAsientos){
		$asientosDisponible=$this->getCantAsientos();
		$hayLugar=$cantAsientos>$asientosDisponible;
		if($hayLugar){
			$disponible=$asientosDisponible-$cantAsientos;
			$this->setCantAsientosDisponible($disponible);
		}
		return $hayLugar;

	}
}