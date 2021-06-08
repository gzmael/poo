<!-- 

 P.O.O

 - Estrutura de uma classe
 - Propriedades e Métodos
 - Visibilidade (public, private e protected)
 - Método construtor
 - Herança

 - Propriedades e Métodos Estáticos
 - Abstração de Classes
 - Métodos Mágicos no PHP

 -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<p>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

abstract class Usuario {
  private $email;
  private $senha;

  public static function mudarEmail($novoEmail) {
    $this->email = $novoEmail;
  }
}

class Aluno extends Usuario {
  public $matricula;
  public $nome;

}

$obj = new Aluno();
$obj->mudarEmail("jezmael@gmail.com");


?>
  </p>
</body>
</html>