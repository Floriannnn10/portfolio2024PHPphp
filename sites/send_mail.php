<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$mail = new PHPMailer(true);

try {
    // Paramètres du serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'sandbox.smtp.mailtrap.io';  // SMTP Server de Mailtrap
    $mail->SMTPAuth   = true;
    $mail->Username   = '0ea621fa90b431';     // Votre nom d'utilisateur Mailtrap
    $mail->Password   = '3a738cf7111cf2';     // Votre mot de passe Mailtrap
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 2525;                // Le port SMTP utilisé par Mailtrap

    // Destinataires
    $mail->setFrom('bangageorgesemmanuel.12@gmail.com', 'Florian'); // Adresse de l'expéditeur
    $mail->addAddress('bangageorgesemmanuel10@gmail.com', 'Banga'); // Adresse du destinataire

    // Contenu de l'email
    $mail->isHTML(true); // Paramètre l'email en format HTML
    $mail->Body    = 'Felicitation, tu l\'as fait. <b>Congrat !!</b>'; // Corps de l'email en HTML
    $mail->Subject = 'Felicitation';   // Sujet de l'email
    $mail->AltBody = 'Message passé'; // Corps de l'email en texte brut

    $mail->send(); // Envoie l'email
    echo '<div class="alert alert-success" role="alert">
    Votre message a été envoyé avec succès. Je vous repondrai très rapidement, merci.
  </div>';   // Affiche un message de succès

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; // Affiche un message d'erreur
}
