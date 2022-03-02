<?php 

    class clasePadre{
        public function metodoPadre(){
            return "hola desde padre";
        }
        public function metodo1(){
            return "este es metodo padre";
        }
    }
    class claseHijo extends clasePadre{
        public function metodoHijo(){
            // return self::metodo1(); //si uso self llamara al metodo que esta inicialmente, en este caso claseHijo
            return parent::metodo1(); //si ysno parent llamara al metodo que esta despues de extends, en este caso clasePadre
        }
        public function metodo1(){
            return "este es metodo hijo";
        }
    }
    // la herencia es obtener todas las propiedades de una clase a otra mediante la palabra reservada extends

    $objeto=new claseHijo();
    echo $objeto->metodoHijo();

    // instancia rapida o de doble puntuacion 
    // echo claseHijo :: metodoHijo(); se la hace de a pedo profe, nomas se pone de mamon, mejor la instancia de objeto xd
    // cuando vaya hacer herencias tengo que usar estatic o volver un metodo estatico para poder ejecutarlo
?>