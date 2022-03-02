<?php 

    // los metodos protegidos solo se pueden llamar desde una clase heredada 

    class clasePadre{
        protected function metodoPadre(){
            return "metodo protegido";
        }
    }
    class claseHija extends clasePadre{
        public function muestra(){
            return parent::metodoPadre();
        }
    }

    $objeto = new claseHija();
    echo $objeto->muestra();

?>