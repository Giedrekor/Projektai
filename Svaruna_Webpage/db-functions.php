<?php

    $arRodytiZinutes = true;

    define( "DB_PAVADINIMAS", "svaruna_db" );
    define( "DB_VARTOTOJAS", "root" );
    define( "DB_SLAPTAZODIS", "root" );
    define("DB_HOST", "localhost");


    $prisijungimas = mysqli_connect( DB_HOST, DB_VARTOTOJAS, DB_SLAPTAZODIS, DB_PAVADINIMAS);
    mysqli_set_charset($prisijungimas, "utf8");

    function getPrisijungimas() {
        global $prisijungimas;   

    if ($prisijungimas) {
        // echo "Prisijungei prie DB sekmingai <br />";
    } else {
        if ($arRodytiZinutes) {
            echo "ERROR: Prisijungti nepavyko!!! <br />" . mysqli_connect_error();
        }
    }

        return $prisijungimas;
    }
    getPrisijungimas();


    function getPaslaugos($nr) {
        $manoSQL = "SELECT * FROM `paslaugos` WHERE id = $nr";
        $rezultatai = mysqli_query(getPrisijungimas(), $manoSQL); 

        $rezultataiArray = mysqli_fetch_row($rezultatai); 

    return $rezultataiArray; //is DB grize paslaugos
    }