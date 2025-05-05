<?php
  class Lampada{
    public $Fabricante;
    public $Tensao;
    public $Potencia;
    public $Cor;
    public $Status;

    public function Ligar(){
        $this->Status = True;

    }
    public function Desligar(){
        $this->Status = False;
        
    }
    public function MostrarDados(){
       echo "Fabricante: " . $this ->Fabricante . "<br>";
       echo "Tensao: " . $this ->Tensao . "<br>";
       echo "Potencia: " . $this ->Potencia . "<br>";
       echo "Cor: " . $this ->Cor . "<br>";
       echo "Esta Ligado?: " . $this ->Status . "<br>";
      if ($this->Status == true){
          echo "Esta Ligado?: SIM <br>";
      }else{
          echo "Esta Ligado?: NÃO <br>";
      }
    }

  }
    

?>