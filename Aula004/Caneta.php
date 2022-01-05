<?php

class Caneta {
    public $modelo;
    private $ponta;
    
    
    
    
    
    // =================
    // GETTERS E SETTERS
    // =================
    
    function getModelo() {
        return $this->modelo;
    }

    function getPonta() {
        return $this->ponta;
    }

    function setModelo($modelo): void {
        $this->modelo = $modelo;
    }

    function setPonta($ponta): void {
        $this->ponta = $ponta;
    }

    
        
    
    
    
    // =================
    //      MÉTODOS
    // =================
    
    public function rabiscar(){
        if ($this->tampada == true) {
            echo "<p>Não posso rabiscar porque estou tampada.</p>";
        } else {
            echo "<p>Estou rabiscando.........</p>";
        }
    }
    
    public function tampar() {
        $this->tampada = true;
    }
    
    public function destampar() {
        $this->tampada = false;
    }
    
}

?>
