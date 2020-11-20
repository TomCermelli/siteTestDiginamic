<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require "php/global_var.php";
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/autoload.php';

$message_sent = false;
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

      $mail->Host = MAIL_SMTP;                    // Set the SMTP server to send through
      $mail->Port = 587;                                    // TCP port to connect to, use 465 for `PHP
      $mail->isSMTP(true);
      $mail->setFrom($_POST['email'], 'Mailer');
      $mail->Username = MAIL_LOG;                     // SMTP username
      $mail->Password = MAIL_PAS;                               // SMTP password
      $mail->addAddress(MAIL_LOG, '');     // Add a recipient

      // Content
      $mail->isHTML(true);                                  // Set email format to HTML
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
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<?php
 if($message_sent):
?>

    <h3>Merci, je vous recontacterai dés que possible.</h3>

<?php
else:
?>
      <h1>Contact</h1>
      <p>Vous pouvez me contacter via le formulaire de contact ci-dessous<p>
      <!--On envoie un formulaire avec la methode POST, l'action nous permet d'indiquer quelle fichier on doit viser avec ce formulaire-->
      <form method="post" action="contact.php">
        <section class="userName"> <!--cette section représente le nom/prénom de l'user-->
            <label for="Nom">Nom :</label>
        		<input type="text" name="name" placeholder="Nom..." required/>
        </section>
        <section class="mail">
            <label for="Email">Email :</label>
        		<input type="email" name="email" placeholder="Email..." />
        </section>
        <section class="subject">
            <label for="Subject">Sujet :</label>
        		<input type="text" name="subject" placeholder="Sujet..." />
        </section>
        <section class="userMessage">
          <label for="Message">Message</label><br>
          <textarea id="messageUser" name="message" rows="3" cols="40"></textarea>
        </section>
        <input type="submit" value="Submit" />
      </form>
    <?php
    endif
    ?>

  </body>
</html>
