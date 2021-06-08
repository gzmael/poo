<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Conta {
  private $codigo;

}

class Usuario extends Conta {

  private $nome;
  private $email;
  private $senha;

  function __construct(
    $nome,
    $email,
    $senha
  ){
    $this->nome = $nome;
    $this->email = $email;
    $this->senha = $senha;
  }

  public function __get($prop) {
    return $this->$prop;
  }

  public function __set($prop, $valor) {
    $this->$prop = $valor;
  }

  public function __toString()
  {
    return "Você converteu em texto";
  }
}


$conta = new Usuario(
  "Quemuel", 
  "quemuelindao@gmail.com", 
  "123456"
);
echo "<p>";
echo $conta->senha;
$conta->senha = "qwe12345";
$conta->conta = "1234";
echo "<br/>" . $conta->senha;
echo "<br/>" . $conta->conta;
echo "<br/>" . $conta;
echo "</p>";



?>