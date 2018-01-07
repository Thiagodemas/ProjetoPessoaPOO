<?php
/**
 * Description of funcionario
 *
 * @author thiagodemas
 */
require_once './Pessoa.php';
class funcionario extends Pessoa{

    private $setor;
    private $trabalhando;
    
    
    
    function getSetor() {
        return $this->setor;
    }

    function getTrabalhando() {
        return $this->trabalhando;
    }

    function setSetor($setor) {
        $this->setor = $setor;
    }

    function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

    public function mudarTrabalho($t){
        $this->setSetor($t);
    }

}
