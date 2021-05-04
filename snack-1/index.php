<?php
  $matches = [
    [ 'squadraCasa' => 'Olimpia Milano',
      'squadraOspite' => 'Cantù',
      'punteggioCasa' => '55',
      'punteggioOspite' => '60'
    ],
    [ 'squadraCasa' => 'Torino',
      'squadraOspite' => 'Lecce',
      'punteggioCasa' => '75',
      'punteggioOspite' => '50'
    ]
  ];
  foreach ( $matches as $match) {
    echo "{$match['squadraCasa']} - {$match['squadraOspite']} | {$match['punteggioCasa']} - {$match['punteggioOspite']} \n";
    // echo $match['squadraCasa'] . " - " . $match['squadraOspite'] . " | " . $match['punteggioCasa'] . " - " . $match['punteggioOspite'] . "\n";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>