<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Estrutura Básica de uma Classe

class Gato {
  // propriedades
  protected $cor;
  protected $sexo;
  protected $peso;
  protected $vacinado = false;

  // private e protected
  // private = só a classe pode chamar/alterar
  // protected = a classe e subclasses

  function __construct($cor = "preto", $sexo = "fêmea") {
    $this->cor = $cor;
    $this->sexo = $sexo;
  }

  // métodos
  protected function Miar() {
    echo "miaaauuuu";
  }

  public function Descricao() {
    echo "Olá eu sou {$this->cor} e sou um(a) {$this->sexo}";
  }
}

// instanciar = Classe->Objeto
$novo = new Gato("preto/branco", "macho");
// $novo->Miar();

$outro = new Gato();
// $outro->sexo = "asdjoaisdjoasd";
$outro->Descricao();

?>