<?php

include "cliente.class.php";
include "conexao.php";

class DAOCliente{
    public function cadastrar(Cliente $cliente){
        $sql = "INSERT INTO cliente
            VALUES (default, :nome, :telefone, :email,:cpf)";

        $con = Conexao::getInstance()->prepare($sql);
        $con->bindValue(":nome", $cliente->getNome());
        $con->bindValue(":telefone", $cliente->getTelefone());
        $con->bindValue(":email", $cliente->getEmail());
        $con->bindValue(":cpf", $cliente->getCpf());
        $con->execute();

        echo "Cadastro com sucesso";



    }
}
?>

<?php

  try{
      $obj = new Cliente();
      $obj->setNome("Teste Cliente");
      $obj->setTelefone("(21)2132-3213");
      $obj->setEmail("teste@email.com");
      $obj->setCpf("123.456.789-10");

      $DAO = new DAOCliente();
      $DAO->cadastrar($obj);
    }catch(Expetion $e){
        echo $e->getMenssagem();
    }
 
?>