<!-- header --------------->
<div class="fixed-top">  

<?php
include('header.php');
?>

<!-- meniu ---------------->
    <nav id="navbar-example2" >
        <div class="container-fluid bg-dark">  
            <div class="container bg-dark">
                <div class="nav nav-pills justify-content-around topnav" id="myTopnav">
                    <a class="nav-link active" href="#Pradinis">Pradinis</a>
                    <a class="nav-link" href="#Paslaugos">Paslaugos</a>
                    <a class="nav-link" href="#Kontaktai">Kontaktai</a>
                    <a class="nav-link" href="#KlientuAtsiliepimai">Klientų atsiliepimai</a>
                    <a class="nav-link" href="#ApieMus">Apie mus</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()"><i class="fa fa-bars"></i></a>
                </div>
            </div>
        </div>
    </nav>
<div>
<div data-spy="scroll" data-target="#navbar-example2" data-offset="0" class="scrollspy-example">

<!-- Pradinis -------------->          
        <div id="Pradinis" class="container-fluid">
            <div class="row">
                <div class="col-12 card bg">
                    <div class=" card-img-overlay text-center pt-5">
                        <h1 class="card-text my-5 font-weight-bold text-white">ŠVARŪNA - visos valymo paslaugos</h1>
                        <h3 class="card-text mt-3 text-light">Mes siūlome platų valymo paslaugų spektrą, <br> užtikrinančių puikius rezultatus ir išlaisvinančius Jus nuo rutininių valymo darbų.</h3>
                    </div>
                </div>
            </div>
        </div>
  
<!-- Paslaugos -------------->
        <h2 id="Paslaugos" class="text-center text-light bg-primary mt-3" >Paslaugos</h2>

        <?php
            include('paslaugos.php');
        ?>

<!-- Kontaktai -------------->
        <h2 id="Kontaktai" class="text-center text-light bg-primary mt-3">Kontaktai</h2><br>
        <div class="row">
            <div class="col">
                <?php
                include_once("db-functions_rekvizitai.php");
                // <div class="field field--name-field-office-details field--type-string-long field--label-hidden field__item text-center"><br /><strong>UAB "ŠVARŪNA"</strong><br><br/>ADRESAS <br/>Pramonės g. 2D<br>72328 Tauragė, Lietuva<br/><br/>DARBO LAIKAS<br/>I - V 8.00 - 17.00<br/>VI -VII nedirbame<br/><br/>TELEFONAS<br/>+370 600 00000<br/><br/>EL. PAŠTAS<br/>info@svaruna.lt<br/></div>
                ?>
            </div>
            <div class="col-9">
                <div class="resposive mapouter"><div class="gmap_canvas"><iframe width="900" height="470" id="gmap_canvas" src="https://maps.google.com/maps?q=Pramon%C4%97s%20g.%202D%2072328%20Taurag%C4%97%2C%20Lietuva&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net"></a></div><style>.mapouter{text-align:center;height:470px;width:900px;}.gmap_canvas {overflow:hidden;background:none!important;height:470px;width:900px;}</style></div>
            </div>
        </div>

<!-- Klientų atsiliepimai -------------->        
        <h2 id="KlientuAtsiliepimai" class="text-center text-light bg-primary mt-3">Klientų atsiliepimai</h2><br>
        <div class="row mb-5">
            <div class="col-xs-1 col-md-3"></div>
            <div class="col-xs-10 col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">

                        <div class="carousel-item active card">
                            <img class="d-block w-100 card-img" src="img/carusel1.jpg" data-src="holder.js/900x400?theme=social" alt="First slide">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center text-dark">
                                <h2 class="card-text display-5 text-center"><strong>"Dėkojame už puikiai atliktą darbą!" - Laiminga klientė</strong></h2>
                            </div>
                        </div>
                        <div class="carousel-item card">
                            <img class="d-block w-100 card-img" src="img/carusel2.jpg" data-src="holder.js/900x400?theme=industrial" alt="Second slide">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center text-dark">
                                <h2 class="card-text text-center display-5"><strong>"Rekomenduoju!" - Laiminga klientė</strong></h2>
                            </div>
                        </div>
                        <div class="carousel-item card">
                            <img class="d-block w-100 card-img" src="img/carusel3.jpg" data-src="holder.js/900x400?theme=industrial" alt="Third slide">
                            <div class="card-img-overlay d-flex align-items-center justify-content-center text-dark">
                                <h2 class="card-text display-5 text-center"><strong>"Ačiū!" - Laiminga klientė</strong></h2>
                            </div>
                        </div>
                    </div>

                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="col-xs-1 col-md-3"></div>
        </div>
        
<!-- Apie mus -------------->
            <h2 id="ApieMus" class="text-center bg-primary text-light mt-3">Apie mus</h2><br>
            <div class="container">
                <div class="row">
                    <div class="col-12 p-md-5 text-justify">
                        <?php
                            include ('db-functions_about.php');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>