<?php 
    // metodo privado solo puede ser accedido por la misma clase en la que fue creado
    // y no puede motrarse fuera de su clase original

    class clase{
        private function metodoPrivado(){
            return "saludando";
        }
        public function mandaSaludo(){
            return self::metodoPrivado();
        }
    }
    $objeto=new clase();
    echo $objeto->mandaSaludo();
    // echo self::mandaSaludo();

?>