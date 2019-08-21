<?php

require('Espectador.php');

class Inscrito extends Espectador{
    private $email;
    private $senha;

    public function __construct($nome,$email,$senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
    }

    public function comentar(string $texto){
        $this->nome . ' falou: '.$texto;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }
}

$inscrito = new Inscrito('Alex','asd@asd.com','123');
$inscrito->visualizar();
$inscrito->setEmail('fff@fff.com');
echo $inscrito->getEmail();

?>