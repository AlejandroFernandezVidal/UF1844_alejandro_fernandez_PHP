<!--Alejandro Fernandez Vidal-->
<?php
class Camio extends Vehicle{
    public static $quantitatCamions=0;
    public function incrementQuantitat(){
        $this::$quantitatCamions++;
    }
    public function potAparcar($planta){
        return $planta==0 ? true: false;
    }
}