<?php

class Prodotto {

  public $tipologia;
  public $materiale;
  public $peso;
  public $codice;

  function __construct($_tipologia, $_materiale, $_peso) {
    $this->tipologia = $_tipologia;
    $this->materiale = $_materiale;
    $this->peso = $_peso;
  }

  function peso_totale($quantita){
    return $quantita * $this->peso;
  }

}

 ?>
