<!--Alejandro Fernandez Vidal-->
<?php
/**
 * Clase Cotxe extiende de vehículo
 * 
 * Clase Cotxe con herencia de atributos y métodos de clase vehículo y con método incremento de vehículo
 * @author Alejandro Fernández Vidal
 * @access public
 */

class Cotxe extends Vehicle{
    /**
     * @access public
     * @var int
     */
    public static $quantitatCotxes=0;
    /**
     * Método para incrementar el número de vehículos tipo clase creados
     * 
     * @return void
     * @access public
     */ 
    public function incrementQuantitat(){
        $this::$quantitatCotxes++;
    }
    /**
     * Método para saber si un vehículo puede aparcar según parámetro recibido
     * 
     * @param int $planta número de planta del parking
     * @return boolean si puede o no puede aparcar
     * @access public
     */
    public function potAparcar($planta){
        return ($planta==0 || $planta==-1 || $planta==1)?true:false;
    }
}