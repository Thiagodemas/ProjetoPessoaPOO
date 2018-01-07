<?php
/**
 * Description of Professor
 *
 * @author thiagodemas
 */
require_once './Pessoa.php';
class Professor extends Pessoa {

    private $especialidade;
    private $salario;
    
    
    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


    public function receberAum($a){
        $this->setSalario($this->getSalario() + $a);
    }

}
