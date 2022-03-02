<?php 

    class miClase{
        public $resultado=0;
        public function miMetodo($v1,$v2){
            $this -> resultado = $v1 + $v2;
            return $this -> resultado;
        }
    }

    // instanciar o declara un objeto
    $objeto=new miClase();
    echo $objeto->miMetodo(5,5);

?>