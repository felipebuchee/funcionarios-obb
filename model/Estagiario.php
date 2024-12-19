<?php 

require_once('Funcionario.php');

class Estagiario extends Funcionario{

    public function getSalario() {
        return $this->salarioBase * 0.8;
    }

    public function getCargo(){
        return 'Estagiário';
    }
}