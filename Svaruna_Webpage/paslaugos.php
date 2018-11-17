<?php

    include_once("db-functions.php");
    echo '<div class="row mt-1 px-md-5">';

    //visu paslaugu is DB isvedimas:
        for ($i=1; $i < 4; $i++) { 
            $paslauga = getPaslaugos($i); 
            include("template-paslauga.php");

            if ($i % 3 ==0) {
            echo '</div> <div class="row mt-5 px-5"> ';
            }
        };

    echo '</div>'; 

?>