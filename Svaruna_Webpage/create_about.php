<?php
    require_once( 'ivedimas-i-db_about.php');

    include("header.php");
    echo "<div class='m-5'><h3>Nauji duomenys įvesti. Grįžti į </h3><h3><a href='admin.php'>Švarūna/admin</a></h3></div>";
    include("footer.php");

    $misija = $_GET['misija'];
    $vizija = $_GET['vizija'];


    createAbout($misija, $vizija);