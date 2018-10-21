<?php

    // print_r($_GET); //tesavimui

    $klientoVardas =$_GET['name'];
    $klientoEmail =$_GET['pastas'];
    $klientoKlausimas =$_GET['klausimas'];

    //Load Composer's autoloader
    require ("libs/PHPMailer-master/PHPMailerAutoload.php");

    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );
        $mail->Host = 'tls://smtp.gmail.com:587'; 
        $mail->SMTPSecure = 'ssl';                              // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                      // TCP port to connect to

        //Server settings
        $mail->SMTPDebug = 0;                                 // Enable verbose debug output
        $mail->isSMTP();                                      // Set mailer to use SMTP
    
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'info@svaruna.lt';                 // SMTP username
        $mail->Password = 'svaruna123';                 // SMTP username

        //Recipients
        $mail->setFrom('direktorius@svaruna.lt', 'Direktorius');
        $mail->addAddress('info@svaruna.lt', 'Puslapiu kurejai');     // Add a recipient
        //$mail->addAddress('ellen@example.com');               // Name is optional
        $mail->addReplyTo($klientoEmail, $klientoVardas);
        //$mail->addCC('cc@example.com');
        //$mail->addBCC('bcc@example.com');  

        
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Kliento klausimas';
        $mail->Body    = "<strong> $klientoKlausimas </strong>";
        $mail->AltBody = $klientoKlausimas;

        $mail->send();
        include("header.php");
        echo '<h2 class="m-5 text-center">Jūsų klausimą pavyko išsiųsti.</h2>';
        echo '<div class="m-5 text-center"><h3 class="d-inline-block">Grįžti į <button class="d-inline-block" onclick="myFunction()">Švarūna.lt</button></h3></div>';
    ?>

    <script>
        function myFunction() {
            location.replace("index.php")
        }
    </script>

    <?php
        } catch (Exception $e) {
            echo '<h3>Nepavyko išsiųsti. Mailer error: </h3>', $mail->ErrorInfo;
        }
    ?>