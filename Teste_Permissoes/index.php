<?php

require_once 'vendor/autoload.php';


try {
  $user = new Usuario();
  $user->preencherDados("Bruno", "11985736572","admin");
  $user->cadastrar();
  $user->getNome();
  $user->getTelefone();
  $user->getDataCadastro();
} catch (\Throwable $th) {
  echo 'Exceção capturada: ',  $th->getMessage(), "\n";
}
