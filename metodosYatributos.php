<?php 

    class miClase{
        // atributos
        public $atributo="hola mundo";

        // metodos
        public function miMetodo(){
            // llamar atrubuto
            // usamos seudovariable this

            return $this->atributo;
        }
    }

    // llamar clase
    $c=new miClase();
    // llamar metodo o guardar metodo en una variable
    $impresion = $c->miMetodo();
    // o imprimir llamando el metodo directamente
    echo $c->miMetodo();
    echo '<hr>';
    // imprimir el resultado de mi metodo por variable
    echo $impresion;
    

?>