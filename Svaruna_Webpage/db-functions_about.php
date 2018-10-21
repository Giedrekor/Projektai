<?php

    $arRodytiZinutes = true;

    // define( "DB_PAVADINIMAS", "svaruna_db" );
    // define( "DB_VARTOTOJAS", "root" );
    // define( "DB_SLAPTAZODIS", "root" );
    // define("DB_HOST", "localhost");

    $prisijungimasA = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
    mysqli_set_charset($prisijungimasA, "utf8");

    function getPrisijungimasA() {
        global $prisijungimasA;   

    //logIn patikrinimas
    if ($prisijungimasA) {
        // echo "Prisijungei prie DB sekmingai <br />";
    } else {
        if ($arRodytiZinutes) {
            echo "ERROR: Prisijungti nepavyko!!! <br />" . mysqli_connect_error();
        }
    }

        return $prisijungimasA;
    }
    getPrisijungimasA();

    function getAbout($nr) {
        $manoSQLa = "SELECT * FROM `about` WHERE id = $nr";
        $rezultataiA = mysqli_query(getPrisijungimasA(), $manoSQLa); 

        $rezultataiArrayA = mysqli_fetch_row($rezultataiA);

        return $rezultataiArrayA; //is DB grize tekstai
    }
    $about = getAbout(1);


    echo '<h4><strong>Įmonės misija.</strong></h4>';
    echo '<p>' . $about[1] . '</p><br /><br />';
    echo '<h4><strong>Įmonės vizija.</strong></h4>';
    echo '<p>' . $about[2] . '</p>';
