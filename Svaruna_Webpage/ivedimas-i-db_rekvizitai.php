<?php

$arRodytiZinutes = true;

  define("DB_PAVADINIMAS", "svaruna_db" );
  define("DB_VARTOTOJAS", "root" ); 
  define("DB_SLAPTAZODIS", "root" ); 
  define("DB_HOST", "localhost" );

  $prisijungimas = mysqli_connect(DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
  mysqli_set_charset($prisijungimas, "utf8");

  if ($prisijungimas) {
      // echo "Prisijungei prie DB  <br />";
  } else {
      if ($arRodytiZinutes) {
          echo "ERROR: Prisijungti nepavyko!!! " . mysqli_connect_error();
      }
  }
 
  function getPrisijungimas() {
      global $prisijungimas;  ;

      return $prisijungimas;
  }
  getPrisijungimas();

    // duomenu ivedimas i DB 
    function createRekvizitai($pavadinimas, $adresas, $laikas, $telefonas, $email) {
    
    // Del saugumo uzkoduojame: 
    $pavadinimas = mysqli_real_escape_string( getPrisijungimas(), $pavadinimas);
    $adresas = mysqli_real_escape_string( getPrisijungimas(), $adresas);
    $laikas = mysqli_real_escape_string( getPrisijungimas(), $laikas);
    $telefonas = mysqli_real_escape_string( getPrisijungimas(), $telefonas);
    $email = mysqli_real_escape_string( getPrisijungimas(), $email);

    $manoSQL = "INSERT INTO rekvizitai
                       VALUES (NULL, '$pavadinimas', '$adresas', '$laikas', '$telefonas', '$email')";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    
    if ($arPavyko == false && $arRodytiZinutes == true) {
        echo "ERROR: nepavyko sukurti rekvizitų!!! <br />" . mysqli_error(getPrisijungimas());
    }
}
