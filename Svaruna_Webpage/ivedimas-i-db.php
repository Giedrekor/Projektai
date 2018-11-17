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
    function createReg($service, $data, $vardas, $email, $telefonas, $adresas, $komentarai) {
    
    // Del saugumo uzkoduojame: 
    $vardas = mysqli_real_escape_string( getPrisijungimas(), $vardas);
    $email = mysqli_real_escape_string( getPrisijungimas(), $email);
    $telefonas = mysqli_real_escape_string( getPrisijungimas(), $telefonas);
    $adresas = mysqli_real_escape_string( getPrisijungimas(), $adresas);
    $komentarai = mysqli_real_escape_string( getPrisijungimas(), $komentarai);

    $manoSQL = "INSERT INTO registracija
                       VALUES (NULL, '$service', '$data', '$vardas', '$email', '$telefonas', '$adresas', '$komentarai')";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    
    if ($arPavyko == false && $arRodytiZinutes == true) {
        echo "ERROR: nepavyko sukurti registracijos!!! <br />" . mysqli_error(getPrisijungimas());
    }
}
