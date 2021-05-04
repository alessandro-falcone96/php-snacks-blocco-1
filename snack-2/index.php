<?php
  $name = $_GET["name"];
  $mail = $_GET["mail"];
  $age = $_GET["age"];

  $array = [
    'nome' => $_GET["name"],
    'mail' => $_GET["mail"],
    'age' => $_GET["age"]
  ];

  $controlloPositivo = 0;
  $controlloNegativo = 0;

  // controllo se il nome è lungo più di 3 caratteri
  if (strlen($array['nome']) > 3)  {
    // echo "NOME OK";
    $controlloPositivo += 1;
  } else {
    // echo "ACCESSO NEGATO";
    $controlloNegativo += 1;
  };


  // controllo se chiocciola è presente una sola volta
  if (((strpos($mail, "@")) !== false) && ((substr_count($mail, "@")) == 1 )) { 
    // echo "@ confermata ";

    //  controllo se dalla chiocciola in poi, un punto è presente
    $arrayMail = (explode("@", $mail));
    $dominioMail = $arrayMail[1];
    if ((strpos($mail, ".")) !== false) { 
      // echo ". confermato";
      $controlloPositivo += 1;
    } else {
      // echo "ACCESSO NEGATO";
      $controlloNegativo += 1;
    };

  } else {
    // echo "ACCESSO NEGATO";
    $controlloNegativo += 1;
  };

  
  // controllo se l'età è un numero
  if (is_numeric($age) == 1) {
    // echo "L'età è un numero";
    $controlloPositivo += 1;
  } else {
    // echo "ACCESSO NEGATO";
    $controlloNegativo += 1;
  }

  // controllo se accesso riuscito o negato
  if ($controlloPositivo == 3) {
    echo "ACCESSO RIUSCITO";
  };
  if ($controlloNegativo > 0) {
    echo "ACCESSO NEGATO";
  };


?>



