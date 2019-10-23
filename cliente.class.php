<?php
 class cliente {
     public $id;
     public $nome;
     public $telefone;
     public $email;
     public $cpf;

     public function setEmail($email){
        $this->email = $email;
     }
     public function getEmail(){
        return $this->email;
     }
     
    }

    $obj = new Cliente ();
    $obj-> setEmail("caio@email.com");// com encapsulamento
    $obj->email = "caio@email.com";// sem encapsulamento

    


?>