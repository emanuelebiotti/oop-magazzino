
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <h1 class="text-center"> Inventario di magazzino (in PHP)</h1>
      <h5>Piccolo elenco ottenuto creando due classi, la seconda delle quali eredita alcuni metodi e propietà della prima </h5>

        <?php

        require_once 'prodotto.php';
        require_once 'cassettiera.php';

        $tavolo = new Prodotto('quercia', 8);

        $quantita = 5;
        echo '<li>Il primo prodotto in magazzino è un tavolo di '.$tavolo->materiale. '. Ce ne sono ' .$quantita.' esemplari per un peso complessivo di '.$tavolo->peso_totale($quantita).' kg.</li>';
        echo '<br>';


       $cassettiera = new Cassettiera('legno massello', 5);
       $cassettiera->tipologia = 'cassettiera';
       $cassettiera->colore = 'giallo';

       $quantita = 6;

       echo '<li>Il secondo prodotto è una cassettiera di '.$cassettiera->materiale.' di colore '.$cassettiera->colore.' che pesa '.$cassettiera->peso.' kg. Ce ne sono '.$quantita.', dunque il loro peso complessivo è di '.$cassettiera->peso_totale($quantita).' kg.</li>';

       ?>


    </div>

  </body>
</html>
