<?php

ini_set('display_errors',1);

include("fruita.php");
include("citric.php");
include("baia.php");
include("pinyol.php");

$kiwi=new Fruita();
$mandarina=new Citric();

echo "<ul>";
$kiwi->setNom("kiwi");
echo "<li>".$kiwi->getNom()."</li>";
$kiwi->setProcedencia("Nueva Zelanda");
echo "<li>".$kiwi->getprocedencia()."</li>";
$kiwi->setPropietats("marró",0.150,8,15);
echo"<li>".$kiwi->getColor()."</li>";
echo"<li>".$kiwi->getPes()."</li>";
echo"<li>".$kiwi->getCalibre()."</li>";
echo"<li>".$kiwi->getAlçada()."</li>";
echo"<li>".$kiwi->getVolumMaxim()."</li>";

$mandarina=new Citric();
$mandarina->setAcidesa(8.9);
$mandarina->setNom("mandarina");
$mandarina->setProcedencia("España");
$mandarina->setPropietats("tronja",0.10,5,5);
echo "<li>".$mandarina->getAcidesa()."</li>";

$cirera=new Pinyol();
$cirera->setPellFina();
$cirera->setNom("cirera");
$cirera->setProcedencia("Alemania");
$cirera->setPropietats("vermella",0.01,1,1);
echo "<li>".$cirera->getPellFina()."</li>";
echo "<li>".$cirera->getPellRugosa()."</li>";

$alvocat=new Pinyol();
$alvocat->setPellRugosa();
$alvocat->setNom("alvocat");
$alvocat->setProcedencia("Méjico");
$alvocat->setPropietats("verd fosc",0.15,10,10);
echo "<li>".$alvocat->getPellRugosa()."</li>";
echo "<li>".$alvocat->getPellFina()."</li>";

$maduixa=new Baia();
$maduixa->setSilvestre(true);
$maduixa->setNom("maduixa");
$maduixa->setProcedencia("Francia");
$maduixa->setPropietats("vermella",0.02,3,2);
echo "<li>".$maduixa->getSilvestre()."</li>";

$kiwi->debug();
$mandarina->debug();
$cirera->debug();
$alvocat->debug();
$maduixa->debug();

echo "</ul>";