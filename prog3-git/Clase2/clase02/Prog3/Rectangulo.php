<?php
require_once "FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica{
    private $_ladoUno;
    private $_ladoDos;

    public function __construct($l1,$l2){
        parent::__construct();
        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;
        $this->CalcularDatos();
    }

    protected function CalcularDatos(){
        $this->_perimetro = $this->_ladoUno*2 + $this->_ladoDos*2;
        $this->_superficie = $this->_ladoUno * $this->_ladoDos;
    }

    public function Dibujar(){
        $string = "";
        
        for($i=0;$i<$this->_ladoUno;$i++){
            for($j=0;$j<$this->_ladoDos;$j++){
                $string = $string."*";
            }

            $string = $string."</br>";
        }
        return $string;
       
    }

    public function ToString(){
        //return "Color: ".$this->_color."</br>Lado 1: ".$this->_ladoUno."</br>Lado2: ".$this->_ladoDos."</br>Perimetro: ".$this->_perimetro."</br>Superficie: ".$this->_superficie."</br></br>".$this->Dibujar();
       return "Color: ".$this->_color."</br>Lado 1: ".$this->_ladoUno."</br>Lado2: ".$this->_ladoDos."</br>Perimetro: ".$this->_perimetro."</br>Superficie: ".$this->_superficie."</br></br>"."<p style='color:{$this->GetColor()}'>{$this->Dibujar()}</p>";
      
    }
    
    
}

?>