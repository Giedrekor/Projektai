<!-- footer --------------->
       <div class="container-fluid bg-success">
            <div class="row">
                <footer class="col-12 fixed-bottom bg-info p-1">
                    <h5 class="d-inline">„Švarūna”. </h5>
                    <span class="font-weight-bold"><?php
                            include('getFullYear.php');
                            ?>
                    </span>
                 
                    <h5 class="d-inline">
                        <a href="#Pradinis" class="badge badge-warning float-right">Į viršų</a>
                    </h5>
                </footer> 
            </div>
        </div> 

<!-- issokantis langas KLAUSKITE-------->
<div class="row">
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

<!-- uzklausos forma ----------->
                <form class="form p-3" action="siusti-email.php" method="get">

                    <label for="vardas">Jūsų vardas</label>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Vardas">
                    </div>

                    <label for="pastas">Jūsų paštas</label>
                    <div class="form-group">
                        <input type="email" class="form-control" name="pastas"  placeholder="El. paštas">
                    </div>

                    <label for="klausti">Jūsų klausimas</label>
                    <div class="form-group">
                        <textarea type="text" class="form-control" name="klausimas" placeholder="Jūsų tekstas"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-8">
                            <button type="submit" class="btn btn-primary">Siųsti</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script   src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     


        <script type="text/javascript"  src="main.js">      </script>

    </body>
</html>