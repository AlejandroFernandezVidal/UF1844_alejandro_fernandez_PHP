<!--Alejandro Fernandez Vidal-->
<?php
class Cotxe extends Vehicle{
    public static $quantitatCotxes=0;
    public function incrementQuantitat(){
        $this::$quantitatCotxes++;
    }
    public function potAparcar($planta){
        return ($planta==0 || $planta==-1 || $planta==1)?true:false;
    }
}