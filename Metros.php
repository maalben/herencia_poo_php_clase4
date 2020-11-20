<?php 

require_once 'Valor.php';

class Metros extends Valor{

    public function calcularKilometrosAMetros(){
        return $this->getValor() * 1000;
    }

    public function calcularCentimetrosAMetros(){
        return $this->getValor() / 100;
    }

    public function calcularMilimetrosAMetros(){
        return $this->getValor() / 1000;
    }



}

?>