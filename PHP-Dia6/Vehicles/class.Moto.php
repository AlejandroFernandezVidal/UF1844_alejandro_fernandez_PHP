<!--Alejandro Fernandez Vidal-->
<?php
class Moto extends Vehicle{
    public static $quantitatMotos=0;
    public function incrementQuantitat(){
        $this::$quantitatMotos++;
    }
    public function potAparcar($planta){
        return ($planta==0 || $planta==-1)?true:false;
    }
    
}