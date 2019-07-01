 <?php

 require 'prodotto.php';

 $tavolo = new Prodotto('legno', 8);

 $quantita = 5;
 echo 'Il primo prodotto in magazzino è un tavolo di '.$tavolo->materiale. '. Ce ne sono ' .$quantita.' esemplari per un peso complessivo di '.$tavolo->peso_totale($quantita).' kg.';

  ?>
