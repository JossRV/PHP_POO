<?php 

    class retornoDatos{
            // $string="hola mundo";
            // $entero=10;
            // json
            // $arreglo=array();
        public function string($edad){
            if($edad>=18){
                return "Es mayor de edad";
            }else{
                return "Es menor de edad";
            }
        }

        public function entero($valor){
            if($valor>0){
                return 1;
            }else{
                return 0;
            }
        }

        public function arreglo($ciclos){
            $datos=array();
            for($i=0;$i<$ciclos;$i++){
                $datos[$i]=$i;
            }
            return $datos;
        }

        public function json(){
            $arreglo=array(
                "hdd"=>500,
                "pantalla"=>21,
                "ram"=>8
            );
            return json_encode($arreglo);
        }
    }

    $objeto = new retornoDatos();
    echo $objeto->string(18);
    echo '<hr>';
    echo $objeto->entero(0);
    echo '<hr>';
    var_dump ($objeto->arreglo(3));
    echo '<hr>';
    var_dump ($objeto->json());

?>