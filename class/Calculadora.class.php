<?php 

class Calculadora {
    //atrib
    public $operador;
    public $numbero1;
    public $numero2;

    //methods
    public function __construct(string $one, int $two, int $three) {
        $this->operador = $one;
        $this->numero1 = $two;
        $this->numero2 = $three;
    }

    public function  calcular(){
        switch ($this->operador){
            case 'suma': 
                $result = $this->numero1 + $this->numero2;
                return $result;
            break;
            case 'resta': 
                $result = $this->numero1 - $this->numero2;
                return $result;
            break;
            case 'divi': 
                $result = $this->numero1 / $this->numero2;
                return $result;
            break;
            case 'multi': 
                $result = $this->numero1 * $this->numero2;
                return $result;
            break;
            case 'porce': 
                $result = ( $this->numero1 * $this->numero2 ) / 100;
                return $result;
            break;
            default:
                echo '<b> Ha ocurrido un error </b>';
        break;
        }
    }

}


?>
