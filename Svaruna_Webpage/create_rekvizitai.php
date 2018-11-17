<?php
    require_once( 'ivedimas-i-db_rekvizitai.php');

    include("header.php");
    echo "<div class='m-5'><h3>Nauji rekvizitai įvesti.</h3><br /><h3><a href='admin.php'>Grįžti į Švarūna/admin</a></h3></div>";
    include("footer.php");

    $pavadinimas = $_POST['pavadinimas'];
    $adresas = $_POST['adresas'];
    $laikas = $_POST['laikas'];
    $telefonas = $_POST['telefonas'];
    $email = $_POST['email'];

    createRekvizitai($pavadinimas, $adresas, $laikas, $telefonas, $email);