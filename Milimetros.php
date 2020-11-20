<?php 

require_once 'Valor.php';

class Milimetros extends Valor{

    public function calcularKilometrosAMilimetros(){
        return $this->getValor() * 1000000;
    }

    public function calcularMetrosAMilimetros(){
        return $this->getValor() * 1000;
    }

    public function calcularCentimetrosAMilimetros(){
        return $this->getValor() * 10;
    }



}

?>