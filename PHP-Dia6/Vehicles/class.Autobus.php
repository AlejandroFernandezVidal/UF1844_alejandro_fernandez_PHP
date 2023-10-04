<!--Alejandro Fernandez Vidal-->
<?php
class Autobus extends Vehicle{
        public static $quantitatAutobusos=0;
        public function incrementQuantitat(){
            $this::$quantitatAutobusos++;
        }
        public function potAparcar($planta){
            return $planta==0 ? true: false;
        }
    }