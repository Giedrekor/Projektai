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
    function createAbout($misija, $vizija) {
    
    // Del saugumo uzkoduojame: 
    $misija = mysqli_real_escape_string( getPrisijungimas(), $misija);
    $vizija = mysqli_real_escape_string( getPrisijungimas(), $vizija);

    $manoSQL = "INSERT INTO about
                       VALUES (NULL, '$misija', '$vizija')";
    $arPavyko = mysqli_query(getPrisijungimas(), $manoSQL);
    
    if ($arPavyko == false && $arRodytiZinutes == true) {
        echo "ERROR: nepavyko sukurti!!! <br />" . mysqli_error(getPrisijungimas());
    }
}
