<?php

include "cliente.class.php";

$obj = new Cliente();
$obj->nome = "Fernanda";
$obj->telefone = "12345678";
$obj->email = "fernanda@email.com";
$obj->cpf = "138.564.147-44";

echo $obj->nome;



?>