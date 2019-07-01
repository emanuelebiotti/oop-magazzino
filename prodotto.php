<?php

class Prodotto {

  public $materiale;
  public $peso;
  public $codice;

  function __construct($_materiale, $_peso) {
    $this->materiale = $_materiale;
    $this->peso = $_peso;
  }

  function peso_totale($quantita){
    return $quantita * $this->peso;
  }

}

 ?>
