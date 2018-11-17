<!DOCTYPE html>
<html lang="lt" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Švarūna rezervuokite!</title>

        <link rel="stylesheet" href="./material.min.css">
        <script src="./material.min.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

        <!-- Fontas su ikonelemis -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="libs/bootstrap4/css/bootstrap.css">

        <!-- !!! mano CSS vissade zemiau -->
        <link rel="stylesheet" href="css/style.css">

        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    
    <body>
<!-- header --------------->
    <?php
        include ("header.php");
    ?>

<!-- registracija ---------->
    <div class="container-fluid bg-secondary" id="Pradinis">
        <div class="row">   
            <div class="container py-3 bg-info">
                <h2>Užpildykite rezervaciją:</h2>
                <form id="myform" action="create_reg.php" method="get" class="form-horizontal col-10">
                                    
                    <div class="form-group">
                        <label class="ea-label col-sm-4 control-label">Pasirinkite paslaugą: *</label>
                            <div>
                                <select name="service" data-c="paslauga" class="col-sm-8 filter form-control" required>
                                    <option value="" selected="selected">-</option><option data-duration="120" data-slot_step="120" value="Namų valymas" >Namų valymas</option><option data-duration="120" data-slot_step="120" value="Biurų valymas" >Biurų valymas</option><option data-duration="120" data-slot_step="120" value="Automobilio valymas" >Automobilio valymas</option></select>
                            </div>
                    </div>

                    <div class="form-group">
                        <label class="ea-label col-sm-6 control-label">Pasirinkite Jums tinkamą datą: *</label>
                        <div>
                            <?php
                                include ("calendar.php");
                            ?>
                        </div>
                    </div>            
                        
                    <h3>Asmeninė informacija</h3>
                    <h6>Laukeliai su * yra privalomi</h6>
                            
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Vardas * : </label>
                        <div class="col-sm-12">
                            <input class="form-control custom-field" maxlength="499" type="text" name="vardas" required>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label class="col-sm-6 control-label">El. paštas * : </label>
                        <div class="col-sm-12">
                            <input class="form-control custom-field" maxlength="499" type="email" name="email" required>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Telefono nr. * : </label>
                        <div class="col-sm-12">
                            <input class="form-control custom-field" maxlength="499" type="text" name="telefonas" required>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Adresas * : </label>
                        <div class="col-sm-12">
                            <input class="form-control custom-field" maxlength="499" type="text" name="adresas" required>
                        </div>
                    </div>
                            
                    <div class="form-group">
                        <label class="col-sm-6 control-label">Komentarai * : </label>
                        <div class="col-sm-12">
                            <textarea class="form-control custom-field" rows="3" maxlength="499" style="height: auto;" name="komentarai" required></textarea>
                        </div>
                    </div>
                            
                    <h3 id="booking-overview-header">Rezervacijos peržiūra</h3>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8 ea-actions-group" style="display: inline-flex;">
                            <button class="ea-btn ea-submit btn btn-primary">Patvirtinti</button>   
                            <button class="ea-btn ea-cancel btn btn-default">Atšaukti</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php
        include ("footer.php");
    ?>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <script src="libs/javascript_form/gen_validatorv4.js" type="text/javascript"></script>



    <script type="text/javascript"  src="main.js"> 
        var frmvalidator  = new Validator("myform");
    </script>

    </body>
</html>