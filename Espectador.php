<?php

    class Espectador{
        protected $nome;

        public function __construct(string $nome){
            $this->nome = $nome;
        }

        public function visualizar(){
            echo $this->nome.' está te vendo...';
        }
    }

   // $e = new Espectador('Funaro');
   // $e->visualizar();
?>