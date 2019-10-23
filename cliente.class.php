<?php
 class cliente {
     public $id;
     public $nome;
     public $telefone;
    
     public $cpf;
    
     private $email;

        public function setEmail($email){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
             $this->email = $email;
            }else{
                throw new Expection('E-mail Inválido');
            } 
        }
        public function getEmail(){
          return $this->email;
        }
     
    }

    $obj = new Cliente ();
    $obj-> setEmail("caio@email.com");// com encapsulamento
    echo $obj->getEmail();// com encapsulamento
    echo "<br/>";
    $obj->email = "caio@email.com";// sem encapsulamento
    echo $obj->email;// sem encapsulamento

    


?>