<?php

class Carro {
  private $marca;
  private $cor;
  private $tipo;
  private $preco;

  // método construtor
  function __construct($marca, $cor, $tipo, $preco){
    $this->marca = $marca;
    $this->cor = $cor;
    $this->tipo = $tipo;
    $this->preco = $preco;
  }

  public function mudarCor($cor) {
    $this->cor = $cor;
  }

  public function pegarCor() {
    echo $this->cor;
  }

  public function descricaoCarro() {
    echo "Esse carro é um {$this->tipo} da cor {$this->cor} e com o valor de R$ {$this->preco}";
  }

  public function alterarMarca($marca) {
    $this->marca = $marca;
  }
  public function alterarCor($cor) {
    $this->cor = $cor;
  }
  public function alterarPreco($preco) {
    $this->preco = $preco;
  }
  public function alterarTipo($tipo) {
    $this->tipo = $tipo;
  }

}

$novoCarro = new Carro("Fiat", "Vermelho", "SUV", 45000);
$novoCarro->descricaoCarro();


/* 
public - todos tem acesso
private - classe
protected - classe e subclasses

*/


?>