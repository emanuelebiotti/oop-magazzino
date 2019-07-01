
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">

      <?php

      require_once 'prodotto.php';
      require_once 'cassettiera.php';

      $tavolo = new Prodotto('quercia', 8);

      $quantita = 5;
      echo 'Il primo prodotto in magazzino è un tavolo di '.$tavolo->materiale. '. Ce ne sono ' .$quantita.' esemplari per un peso complessivo di '.$tavolo->peso_totale($quantita).' kg.';
      echo '<br>';


     $cassettiera = new Cassettiera('legno massello', 5);
     $cassettiera->colore = 'giallo';

     $quantita = 6;

     echo 'Il secondo prodotto è una cassettiera di '.$cassettiera->materiale.' di colore '.$cassettiera->colore.' che pesa '.$cassettiera->peso.' kg. Ce ne sono '.$quantita.' dunque il loro peso complessivo è di '.$cassettiera->peso_totale($quantita).' kg.';

     ?>


    </div>

  </body>
</html>
