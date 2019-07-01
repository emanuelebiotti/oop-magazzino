 <?php

 require 'prodotto.php';

 $prodotto1 = new Prodotto('tavolo', 'legno', 8);

 $quantita = 5;
 echo 'Il primo prodotto in magazzino è un '.$prodotto1->tipologia. '. Ce ne sono ' .$quantita.' esemplari per un peso complessivo di '.$prodotto1->peso_totale($quantita).' kg';

  ?>
