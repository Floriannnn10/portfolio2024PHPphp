<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "portfolio_php";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connexion réussie";
} catch (PDOException $e) {
    echo "La connexion a échoué: " . $e->getMessage();
}

$messageEnvoye = false;

if (isset($_POST['envoyer'])) {
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];

    $sql = "INSERT INTO utlisateur_send (nom, email, objet, message) VALUES (:nom, :email, :objet, :message)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':objet', $objet);
    $stmt->bindParam(':message', $message);
    if ($stmt->execute()) {
        $messageEnvoye = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="contact.css">
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <br><br>

    <!-- formulaire contact  -->
    <h2 class="Question-Formulaire" style="text-align:center;">Si vous avez des questions <br> n'hésitez pas à me laisser un message.</h2>

    <?php if ($messageEnvoye) : ?>
        <div class="alert alert-success" role="alert" style="text-align:center;">
            Votre message a été envoyé avec succès.
        </div>
    <?php endif; ?>

    <div class="contact">
        <div class="container">
            <div class="row justify-content">
                <div class="col-12 col-md-8 col-lg-6">
                    <img src="../Images_portfolio/florian_cv.png" alt="" style="max-width: 200%; height: 440px;">
                </div>
            </div>
        </div>

        <div class="container mt-5" style="margin-right:150px">
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="nom"></label>
                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre Nom" required>
                </div>
                <div class="form-group">
                    <label for="email"></label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Votre Email" required>
                </div>
                <div class="form-group">
                    <label for="objet"></label>
                    <input type="text" class="form-control" id="objet" name="objet" placeholder="Objet" required>
                </div>
                <div class="form-group">
                    <label for="message"></label>
                    <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
                </div>
                <div class="bouton">
                    <button type="submit" name="envoyer" id="envoyer" class="boutton-envoyer">Envoyer</button>
                </div>
            </form>
        </div>
    </div>

    <br><br>

    <!-- Réseaux sociaux -->
    <div class="reseaux">
        <a href="https://www.linkedin.com/in/georges-emmanuel-banga-4925bb30a?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"><img src="../reseaux sociaux/linked in.png" alt="LinkedIn" height="30px"></a>
        <a href="https://wa.me/+2250150270264"><img src="../reseaux sociaux/WhatsApp_icon.png" alt="WhatsApp" height="35px"></a>
        <a href="https://www.instagram.com/floriannnn_10?igsh=NWg1YzI4ajRudDYy&utm_source=qr"><img src="../reseaux sociaux/Instagram_logo_2022.svg.png" alt="Instagram" height="30px"></a>
    </div>

    <br><br>

    <?php
    include 'footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>