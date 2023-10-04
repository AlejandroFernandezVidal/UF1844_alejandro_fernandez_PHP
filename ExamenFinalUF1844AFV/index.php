<?php

//Afegim la visualització d'errors en cas de que hi hagin
ini_set('display_errors',1);

//Incluïm les classes creades per a l'activitat i poder utilitzarles
include("electrodomestic.php");
include("rentadora.php");
include("microones.php");

//Instanciem un objete de la classe electrodomèstic i comprobem els mètodes set i get dels atributs
$electrodomestic = new Electrodomestic();
$electrodomestic->setMarca("Bosch");
echo "<lu>";
echo "<li>".$electrodomestic->getMarca()."</li>";
$electrodomestic->setModel("Serie 6");
echo "<li>".$electrodomestic->getModel()."</li>";
$electrodomestic->setCategoria("A");
echo "<li>".$electrodomestic->getCategoria()."</li>";

echo "<br>";

//Instanciem un objete de la classe rentadora amb els seus atributs i els generals i comprobem els mètodes heredats i els pròpis
$rentadora = new Rentadora();
$rentadora->setMarca("Candy");
echo "<li>".$rentadora->getMarca()."</li>";
$rentadora->setModel("FIDC X502");
echo "<li>".$rentadora->getModel()."</li>";
$rentadora->setCategoria("B");
echo "<li>".$rentadora->getCategoria()."</li>";
$rentadora->setCapacitat(9);
echo "<li>".$rentadora->getCapacitat()."</li>";
$rentadora->setRevolucions(1200);
echo "<li>".$rentadora->getRevolucions()."</li>";

echo "<br>";

//Instanciem un objete de la classe microones amb els seus atributs i els heredats i comprobem els mètodes heredats i els pròpis
$microones = new Microones();
$microones->setMarca("Teka");
echo "<li>".$microones->getMarca()."</li>";
$microones->setModel("NWE 225 G");
echo "<li>".$microones->getModel()."</li>";
$microones->setCategoria("C");
echo "<li>".$microones->getCategoria()."</li>";
$microones->setPotencia(900);
echo "<li>".$microones->getPotencia()."</li>";
$microones->setGrill(true);
echo "<li>".$microones->getGrill()."</li>";
echo "<li>".$microones->calcularCategoria()."</li>";