<?php 
class Valor{

    private $valor;

    public function __construct(){
        $this->valor = 0;
    }

    public function setValor($value){
        $this->valor = $value;
    }

    public function getValor(){
        return $this->valor;
    }
}
?>