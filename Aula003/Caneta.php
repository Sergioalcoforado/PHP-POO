<?php

class Caneta {
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

        
    
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
