<!--Alejandro Fernandez Vidal-->
<?php

/**
 * Clase vehículo con parámetros de vehículo y métodos
 * 
 * Esta clase es la estructura básica de vehículo con atributos y métodos generales de los vehículos
 * 
 * @author Alejandro Fernández Vidal <alexfervid@gmail.com>
 * @access public
 */
class Vehicle{
    private $matricula="";
    private $marca="";
    private $model="";

    /**
     * Método constructor para instanciar objetos clase Vehiculo con los parámetros correspondientes 
     * 
     * @param string $matricula matricula vehículo
     * @param string $marca marca vehículo
     * @param string $model modelo vehículo
     * @return objeto vehiculo
     * @access public
     */
    public function __construct($matricula,$marca,$model){
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->model = $model;
        $this->incrementQuantitat();//Cridem a la funció per incrementar i comptar els tipus de vehícules creats
    }
    /**
     * Método para saber si un vehículo puede aparcar según parámetro recibido
     * 
     * @param int $planta número de planta del parking
     * @return boolean si puede o no puede aparcar
     * @access public
     */
    public function potAparcar($planta){

    }
    /**
     * Método para obtener la matrícula del vehículo
     * 
     * @return string $matricula del vehículo
     * @access public
     */
    public function getMatricula(){
        return $this->matricula;
    }
    /**
     * Método para modificar la matrícula del vehículo con partámetro recibido
     * 
     * @param string $matricula nueva matrícula del vehículo
     * @return void
     * @access public
     */
    public function setMatricula($matricula){
        $this->matricula = $matricula;
    }
    /**
     * Método para obtener la marca del vehículo
     * 
     * @return string $marca del vehículo
     * @access public
     */
    public function getMarca(){
        return $this->marca;
    }
    /**
     * Método para modificar la marca del vehículo con partámetro recibido
     * 
     * @param string $marca nueva marca del vehículo
     * @return void
     * @access public
     */
    public function setMarca($marca){
        $this->marca = $marca;
    }
    /**
     * Método para obtener el modelo del vehículo
     * 
     * @return string $model del vehículo
     * @access public
     */
    public function getModel(){
        return $this->model;
    }
    /**
     * Método para modificar la matrícula del vehículo con partámetro recibido
     * 
     * @param string $model nuevo modelo del vehículo
     * @return void
     * @access public
     */
    public function setModel($model){
        $this->model = $model;
    }
}