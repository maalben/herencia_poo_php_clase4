<?php 

require_once 'Valor.php';

class Kilometros extends Valor{

    public function calcularMetrosAKilometros(){
        return $this->getValor() / 1000;
    }

    public function calcularCentimetrosAKilometros(){
        return $this->getValor() / 100000;
    }

    public function calcularMilimetrosAKilometros(){
        return $this->getValor() / 1000000;
    }



}

?>