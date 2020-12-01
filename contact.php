<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "php/global_var.php";
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

$message_sent = false;
$current = "contact";
$mail = new PHPMailer();
if(isset($_POST['email']) && $_POST['email'] != ''){
  if( filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
      $mail->SMTPAuth  = true;                                   // Enable SMTP authentication
      $mail->SMTPDebug = 0;                      // Enable verbose debug output
      $mail->SMTPSecure = "tsl";         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
      $mail->SMTPOptions = array(
              'ssl' => array(
                  'verify_peer' => false,
                  'verify_peer_name' => false,
                  'allow_self_signed' => true
              )
          );

      $mail->Host = MAIL_SMTP;                    // Le SMPTP que l'on va utiliser par exemple gmail
      $mail->Port = 587;
      $mail->isSMTP(true);
      $mail->setFrom($_POST['email'], $_POST['email']); // le nom de l'expéditeur
      $mail->Username = MAIL_LOG;                     // SMTP le login de notre mail
      $mail->Password = MAIL_PAS;                               // le mot de passe de notre mail
      $mail->addAddress(MAIL_LOG, '');

      // Content
      $mail->isHTML(true);                                  // On envoie un email sous forme HTML
      $mail->Subject = $_POST['subject'];
      $mail->Body    = $_POST['message'];
      $mail->send();
      $message_sent = true;
      }
    }
?>

<html>
  <head>
    <title>Formulaire en de contact en PHPL</title>
    <meta charset="utf-8"> <!--afin de lire les caratères spéciaux comme le "é" "è"-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/head_foot.css">
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>
<?php
 if($message_sent):
?>
  <?php include "html/header.php" ?>

    <h3>Merci, je vous recontacterai dés que possible.</h3>


<?php
else:
?>
  <?php include "html/header.php" ?>
  <div class="contactContainer">
    <h1 class="mainTitle">Contact</h1>
    <p class="heroText">Vous pouvez me contacter via le formulaire de contact ci-dessous<p>
    <!--On envoie un formulaire avec la methode POST, l'action nous permet d'indiquer quelle fichier on doit viser avec ce formulaire-->
    <form method="post" action="contact.php">

        <section class="userName"> <!--cette section représente le nom/prénom de l'user-->
          <div class="col-2">
            <label style="font-size:1.9em;">Nom :</label>
          </div>
          <div class="col-10 pad">
        		<input type="text" name="name" placeholder="Nom..." style="width: 100%; height: 50px;" required/>
          </div>
        </section>
        <section class="mail">
          <div class="col-2">
            <label style="font-size:1.9em;">Email :</label>
          </div>
          <div class="col-10 pad">
        		<input type="email" name="email" placeholder="Email..." style="width: 100%; height: 50px;"/>
          </div>
        </section>
        <section class="subject">
          <div class="col-2">
            <label style="font-size:1.9em;">Sujet :</label>
          </div>
          <div class="col-10 pad">
        		<input type="text" name="subject" placeholder="Sujet..." style="width: 100%; height: 50px;"/>
          </div>
        </section>
        <section class="userMessage">
          <div class="col-2">
            <label style="font-size:1.8em;">Message:</label><br>
          </div>
          <div class="col-10 pad">
            <textarea id="messageUser" name="message" rows="3" cols="40" style="width: 100%; height: 100px;" placeholder="Message..."></textarea>
          </div>
        </section>
      <input type="submit" value="Submit" style="float:right;"/>
    </form>
  </div>
  <?php include "html/footer.html" ?>
  <?php
  endif
  ?>

  </body>
</html>
