<?php

class Produto {
  private $nome;
  private $cod;
  private $preco;
  private $descricao;

  function __construct($nome, $cod, $preco, $descricao) {
    $this->nome = $nome;
    $this->cod = $cod;
    $this->preco = $preco;
    $this->descricao = $descricao;
  }

  public function exibirResumo() {
    echo "Descrição do produto";
  }

}