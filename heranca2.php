<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
class Sedan {
  private $portas = 4;
  private $portaMalas = 450;
  private $direcao = 'hidraulica';

  public function Apresentacao() {
    echo "Sou um sedan de {$this->portas} portas, com o porta-malas de {$this->portaMalas} litros e com direção {$this->direcao}.";
  }
}

class Civic extends Sedan {
  public $tipo = 'civic';
  private $portas = 4;
  private $portaMalas = 450;
  private $direcao = 'hidraulica';

  public function mostraTipo() {
    echo $this->tipo;
  }

  public function Apresentacao() {
    echo "Sou um sedan de {$this->portas} portas, com o porta-malas de {$this->portaMalas} litros e com direção {$this->direcao}.";
  }
  
}

$obj = new Sedan();
// $obj->Apresentacao();

$carro = new Civic();
$carro->Apresentacao();
$carro->portas;