<?php 

require_once 'Valor.php';

class Centimetros extends Valor{

    public function calcularKilometrosACentimetros(){
        return $this->getValor() * 100000;
    }

    public function calcularMetrosACentimetros(){
        return $this->getValor() * 100;
    }

    public function calcularMilimetrosACentimetros(){
        return $this->getValor() / 10;
    }



}

?>