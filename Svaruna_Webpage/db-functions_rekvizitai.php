<?php

    $arRodytiZinutes = true;

    // //kintamieji=konstantos, kurie nesikeis, draudziama
    // define( "DB_PAVADINIMAS", "svaruna_db" );
    // define( "DB_VARTOTOJAS", "root" );
    // define( "DB_SLAPTAZODIS", "root" );
    // define("DB_HOST", "localhost");


    $prisijungimasR = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
    mysqli_set_charset($prisijungimasR, "utf8");

    function getPrisijungimasR() {
        global $prisijungimasR;   

    //logIn patikrinimas
    if ($prisijungimasR) {
        // echo "Prisijungei prie DB sekmingai <br />";
    } else {
        if ($arRodytiZinutes) {
            echo "ERROR: Prisijungti nepavyko!!! <br />" . mysqli_connect_error();
        }
    }

        return $prisijungimasR;
    }
    getPrisijungimasR();

    function getRekvizitai($nr) {
        $manoSQLr = "SELECT * FROM `rekvizitai` WHERE id = $nr";
        $rezultataiR = mysqli_query(getPrisijungimasR(), $manoSQLr); 

        $rezultataiArrayR = mysqli_fetch_row($rezultataiR);

        return $rezultataiArrayR; //is DB grize rekvizitai
    }
    $rekvizitas = getRekvizitai(1);

    echo '<div class="col-md-6 px-md-4 ml-md-5 field field--name-field-office-details field--type-string-long field--label-hidden field__item text-center"><br /><strong>UAB ' .  $rekvizitas[1] . '</strong><br><br/>ADRESAS <br/>' . $rekvizitas[2] . '<br/><br/>DARBO LAIKAS<br/>' . $rekvizitas[3] . '<br/><br/>TELEFONAS<br/>' .  $rekvizitas[4] . '<br/><br/>EL. PAŠTAS<br/>' . $rekvizitas[5] . '<br/></div>';