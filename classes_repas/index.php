<?php

ini_set('display_errors', 1); 

include("fruita.php");
include("citric.php");
include("baia.php");
include("pinyol.php");


echo "<ul>";
echo "<li><b>Instància de classe Fruita amb nom kiwi</b></li>";
$kiwi=new Fruita();
$kiwi->setNom("Kiwi");
echo "<li>getNom: ".$kiwi->getNom()."</li>";

echo "<li><b>Instància de classe Citric amb nom mandarina</b></li>";
$mandarina=new Citric();
$mandarina->setAcidesa(8.9);
echo "<li>getAcidesa: ".$mandarina->getAcidesa()."</li>";
$mandarina->setPropietats("taronja",300,13,13);
echo "<li>getVolumMaxim: ".$mandarina->getVolumMaxim()."</li>";
echo "<li>";
$mandarina->debug();
echo "</li>";

echo "<li><b>Instància de classe Pinyol amb nom poma</b></li>";
$poma=new Pinyol();
$poma->setNom("Poma");
echo "<li>getNom: ".$poma->getNom()."</li>";
$poma->setPropietats("poma",220,10,10);
echo "<li>getVolumMaxim".$poma->getVolumMaxim()."</li>";
$poma->setPellFina();
echo "<li>getPellFina".$poma->getPellFina()."</li>";
echo "<li>getPellFina".$poma->getPellRugosa()."</li>";

echo "<li><b>Instància de classe Baia amb nom mora</b></li>";
$mora=new Baia();
$mora->setPropietats("Mora",10,1.5,1.5);
$mora->setSilvestre();
echo "<li>getPes: ".$mora->getPes()."</li>";
echo "<li>getNom: ".$mora->getNom()."</li>";
echo "<li>getCalibre: ".$mora->getCalibre()."</li>";
echo "<li>getAlçada: ".$mora->getAlçada()."</li>";
echo "<li>getColor: ".$mora->getColor()."</li>";
echo "<li>getSilvestre: ".$mora->getSilvestre()."</li>";

/* Printar missatge segons valor booleà. Mètode 1 */
echo "<li>";
if ($mora->getSilvestre()) {
    echo "és silvestre";
} else{
    echo "no és silvestre";
}
    
echo "</li>";

/* Printar missatge segons valor booleà. Mètode 2 */
echo "<li>";
echo ($mora->getSilvestre())? "és silvestre":"no és silvestre";
echo "</li>";

echo "</ul>";