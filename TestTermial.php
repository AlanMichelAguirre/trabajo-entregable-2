<?php


include_once "Responsable.php";
include_once "Viaje.php";
include_once "Empresa.php";
include_once "Terminal.php";

//1)Se crea una coleccion con un minimo de 2 empresas, ejemplo Metrovias y Tren Patagonico

$empresas = [
    new Empresa("1", "sanLuis", []),
    new Empresa("2", "via sur", [])
];

//2)A cada empresa se le incorporan 2 instancias de la clase viaje
$personaA = new Responsable("Juan", "Perez", 65656, "Calle n°1", 
"mail@mail.com", "299333222");
$viajesA = [
    new Viaje("san luis", 8, 20, 1, 1000, "27/05/2003", 50, 0, $personaA),
    new Viaje("jujuy", 8, 21, 2, 1500, "04/05/2006", 50, 0, $personaA)
];
$personaB = new Responsable("Pedro", "luis", 34343, "calle bolivia", "mail@mail.com", 
"299333222");
$viajesB = [
    new Viaje("play doradas", 3, 17, 3, 500, "27/01/2022", 30, 0, $personaB),
    new Viaje("Buenos Aires", 8, 21, 4, 1500, "04/01/2023", 30, 0, $personaB),
    new Viaje("Buenos Aires", 9, 22, 5, 1500, "01/05/2021", 30, 0, $personaB)
];

$empresas[0]->setColViajes($viajesA);
$empresas[1]->setColViajes($viajesB);

//3)Se crea un objeto terminal con la coleccion de empresas creadas en el punto 1.
$terminal = new Terminal("Teminal", "Ruta 22", $empresas );

//4)Invocar y visualizar el resultado del metodo ventaAutomatica con 
//cantidad de asientos 3 y como destino alguno de los destinos de viaje creados en 2

echo "--------------Punto 4----------------\n"
.$terminal->ventaAutomatica(3, "20/05/2020", "Cordaba", $empresas[0]);

//5)Invocar y visualizar el resultado del método empresaMayorRecaudacion.
echo "-------------Punto 5-----------------\n"
.$terminal->empresaMayorRecaudacion();

//6)Invocar y visualizar el resultado del método responsableViaje 
//correspondiente a uno de los números de viajes del punto 2.
echo "-------------Punto 6-----------------\n"
. $terminal->responsableViaje(2);


