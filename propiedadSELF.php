<?php 

    class metodos{
        public function mandarColor($valor){
            if($valor==1){
                return "rojo";
            }else if($valor==2){
                return "verde";
            }else if($valor==3){
                return "negro";
            }
        }
        public function mostrarColor($tipocolor){
            return self::mandarColor($tipocolor);
        }
    }

    $objeto=new metodos();

    echo $objeto->mostrarColor(3);

?>