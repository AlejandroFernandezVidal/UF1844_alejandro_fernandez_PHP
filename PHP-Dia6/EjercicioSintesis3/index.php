<?php
ini_set("display_errors", 1);
include("header.php");

if(@$_REQUEST["apartat"]=="varietats"){
    echo "<h2>varietats</h2>";
}elseif(@$_REQUEST["apartat"]=="botiga"){
    echo "<h2>botiga</h2>";
}elseif(@$_REQUEST["apartat"]=="sobreNosaltes"){
    echo "<h2>sobre nosaltres</h2>";
}elseif(@$_REQUEST["apartat"]==""){
    include("main.php");
}else{
    echo "<h2>Error: 404 Not Found</h2>";
}

include("footer.php");