<!--Alejandro Fernandez Vidal-->
<?php
/**
     * Clase Autobus extiende de vehículo
     * 
     * Clase Autobus con herencia de atributos y métodos de clase vehículo y con método incremento de vehículo
     * @author Alejandro Fernández Vidal
     * @access public
     */
class Autobus extends Vehicle{
    /**
     * @access public
     * @var int
     */    
    public static $quantitatAutobusos=0;
    /**
     * Método para incrementar el número de vehículos tipo clase creados
     * 
     * @return void
     * @access public
     */    
    public function incrementQuantitat(){
            $this::$quantitatAutobusos++;
        }
    /**
     * Método para saber si un vehículo puede aparcar según parámetro recibido
     * 
     * @param int $planta número de planta del parking
     * @return boolean si puede o no puede aparcar
     * @access public
     */
        public function potAparcar($planta){
            return $planta==0 ? true: false;
        }
    }