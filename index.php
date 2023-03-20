<?php

$hotels = [

  [
    'name' => 'Hotel Belvedere',
    'description' => 'Hotel Belvedere Descrizione',
    'parking' => true,
    'vote' => 4,
    'distance_to_center' => 10.4
  ],
  [
    'name' => 'Hotel Futuro',
    'description' => 'Hotel Futuro Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 2
  ],
  [
    'name' => 'Hotel Rivamare',
    'description' => 'Hotel Rivamare Descrizione',
    'parking' => false,
    'vote' => 1,
    'distance_to_center' => 1
  ],
  [
    'name' => 'Hotel Bellavista',
    'description' => 'Hotel Bellavista Descrizione',
    'parking' => false,
    'vote' => 5,
    'distance_to_center' => 5.5
  ],
  [
    'name' => 'Hotel Milano',
    'description' => 'Hotel Milano Descrizione',
    'parking' => true,
    'vote' => 2,
    'distance_to_center' => 50
  ],

];

// foreach ($hotels as $hotel) {
//   var_dump($hotel);
// }

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>PHP Hotel</title>
</head>

<body>

  <!-- 1 - STAMPO DATI IN PAGINA CON LISTE -->
  <h2 class="text-center py-3">Versione Con Lista</h2>

  <div class="d-flex">

    <?php

    // Stampo in pagina ogni Array di Hotel
    foreach ($hotels as $hotel) {
    ?>
      <ul>
        <?php

        // Stampo il contenuto di ogni Array di Hotel in una Lista
        foreach ($hotel as $key => $val) {
        ?>

          <li>
            <span>
              <!-- Stampo la Chiave -->
              <strong><?php echo $key ?>: </strong>
            </span>
            <span>
              <!-- Stampo il Valore corrispondere alla Chiave -->
              <?php
              // Stampo valori diversi per 'true' e 'false'
              if ($val === true) {
                echo 'SI';
              } elseif ($val === false) {
                echo 'NO';
              } else {
                echo $val;
              }
              ?>
            </span>
          </li>

        <?php
        };

        ?>

      </ul>

    <?php
    };
    ?>
  </div>

  <!-- 2 - STAMPO I DATI IN PAGINA CON TABELLA -->

  <h2 class="text-center mt-5 pb-3">Versione Con Tabella</h2>

  <form action="" method="get">
    <span class="text-decoration-underline me-1">Disponibilita' Parcheggio:</span>
    <span class="me-1">SI</span><input type="radio" name="parking" value="si">
    <span class="me-1">NO</span><input type="radio" name="parking" value="no" checked>
  </form>

  <table class="table w-75 text-center">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Parcheggio</th>
        <th>Voto</th>
        <th>Distanza dal Centro (km)</th>
      </tr>
    </thead>

    <tbody>
      <?php
      // Stampo una RIGA ogni Array di Hotel
      foreach ($hotels as $hotel) {
      ?>
        <tr>
          <td> <?php echo $hotel['name'] ?> </td>
          <td> <?php echo $hotel['description'] ?> </td>
          <td> <?php

                if ($hotel['parking'] === true) {
                  echo 'SI';
                } else {
                  echo 'NO';
                }

                ?>
          </td>
          <td> <?php echo $hotel['vote'] ?> </td>
          <td> <?php echo $hotel['distance_to_center'] ?> </td>
        </tr>
      <?php
      }
      ?>
    </tbody>

  </table>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>