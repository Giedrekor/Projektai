<?php
    require_once( 'ivedimas-i-db.php');

    include("header.php");
    echo "<div class='m-5'><h3>Jūsų registraciją gavome. Per 2 valandas susisieksime.</h3><br /><h3><a href='index.php'>Grįžti į Švarūna.lt</a></h3></div>";
    include("footer.php");

    $service = $_GET['service'];
    $data = $_GET['data'];
    $vardas = $_GET['vardas'];
    $email = $_GET['email'];
    $telefonas = $_GET['telefonas'];
    $adresas = $_GET['adresas'];
    $komentarai = $_GET['komentarai'];

    createReg($service, $data, $vardas, $email, $telefonas, $adresas, $komentarai);