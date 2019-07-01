 <?php

 require_once 'prodotto.php';
 require_once 'cassettiera.php';

 $tavolo = new Prodotto('legno', 8);

 $quantita = 5;
 echo 'Il primo prodotto in magazzino è un tavolo di '.$tavolo->materiale. '. Ce ne sono ' .$quantita.' esemplari per un peso complessivo di '.$tavolo->peso_totale($quantita).' kg.';
 echo '<br>';


$cassettiera = new Cassettiera('legno massello', 5);
$cassettiera->colore = 'giallo';

echo 'Il secondo prodotto è una cassettiera di '.$cassettiera->materiale.' di colore '.$cassettiera->colore.' che pesa '.$cassettiera->peso.' kg';


  ?>
