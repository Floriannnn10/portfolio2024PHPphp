<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <!-- A partir d'ici, le responsive... -->
    <!-- text description de Florian -->
    <div class="grand-container">
        <div class="Image-logo">
            <img src="../Images_portfolio/Flo_en_pull-removebg-preview.png" alt="Florian pose1">
        </div>
        <div class="text-description" style="margin-right:200px; margin-top: 150px;">
            <h1>Salut, Je suis Florian<br> Développeur Full-Stack</h1>

            <!-- A propos de moi  -->
            <p class="dev-web">Je suis un développeur full-stack, passionné par<br> la conception et la création d'applications web et mobiles.<br> Avec une solide formation en technologies web, j'aime <br> transformer des idées innovantes en solutions numériques <br> pratiques et attrayantes. Mon objectif est de maitriser les<br> outils et frameworks modernes pour développer des <br>applications performantes, intuitives et responsive.</p>
            <!--  bouton de téléchargement et contact -->
            <div class="bouton">
                <a href="../Dossier CV/CV professionnel BANGA GEORGES E. .pdf" class="bouton-telechargement" style="color: white;" download>Télécharger Mon CV</a>
                <a style="margin-left: 30px;" href="contact.php"><button>Contactez-Moi</button></a>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>

    <!-- Compétences 1 -->
    <h1 class="comptt" style="text-align: center;">Mes Compétences</h1>
    <br><br>

    <div id="competences">
        <div class="card">
            <img src="../Images_portfolio/image html.jpg" alt="html" height="200px">

            <div class="card__content">
                <p class="card__title">HTML</p>
                <p class="card__description">HTML (HyperText Markup Language) est un langage de balisage utilisé pour créer la structure et le contenu des pages web. Il permet d'organiser le texte, les images, les liens et d'autres éléments multimédias pour les afficher sur un navigateur web.</p>
            </div>
        </div>

        <div class="card">
            <img src="../Images_portfolio/css pic.jpg" alt="css" height="200px">

            <div class="card__content">
                <p class="card__title">Css</p>
                <p class="card__description">CSS, ou Cascading Style Sheets, est un langage utilisé pour décrire la présentation d'un document écrit en HTML ou XML. Il permet de contrôler l'apparence des pages web en séparant le contenu de la structure (HTML) de la présentation visuelle.</p>
            </div>
        </div>

        <div class="card">
            <img src="../Images_portfolio/javascript.png" alt="JS" height="200px">

            <div class="card__content">
                <p class="card__title">Javascript</p>
                <p class="card__description">JavaScript est un langage de programmation de haut niveau, dynamique, faiblement typé, et interprété, principalement utilisé dans les pages web pour permettre des interactions dynamiques et des fonctionnalités complexes côté client.</p>
            </div>
        </div>
    </div>

    <br><br>

    <!-- competences 2 -->
    <div id="competences">
        <div class="card">
            <img src="../Images_portfolio/laravel-1024x600.jpg" alt="laravel" height="200px">

            <div class="card__content">
                <p class="card__title">Laravel</p>
                <p class="card__description">Laravel est un framework PHP open-source qui facilite le développement d'applications web en offrant une architecture modulaire, une syntaxe expressive et des outils intégrés pour les tâches courantes telles que l'authentification, la gestion des sessions...</p>
            </div>
        </div>

        <div class="card">
            <img src="../Images_portfolio/PHP.PNG" alt="PHP" height="200px">

            <div class="card__content">
                <p class="card__title">PHP</p>
                <p class="card__description">PHP (Hypertext Preprocessor) est un langage de script open-source spécialement conçu pour le développement web côté serveur. Il est largement utilisé pour créer des pages web dynamiques et interactives.</p>
            </div>
        </div>

        <div class="card">
            <img src="../Images_portfolio/mysql.jpg" alt="MySQL" height="200px">

            <div class="card__content">
                <p class="card__title">MySQL</p>
                <p class="card__description">
                    MySQL est un système de gestion de base de données relationnelle open-source très populaire, souvent utilisé dans le développement web pour stocker et gérer les données de manière structurée.</p>
            </div>
        </div>
    </div>

    <br><br>
    <!-- competences 3 -->
    <div id="competences">
        <div class="card">
            <img src="../Images_portfolio/boostrap image.jpg" alt="bootstrap" height="200px">

            <div class="card__content">
                <p class="card__title">Bootstrap</p>
                <p class="card__description">Bootstrap est un framework front-end open-source développé par Twitter. Il permet aux développeurs web de créer des interfaces utilisateur modernes et réactives à l'aide de HTML, CSS et JavaScript.</p>
            </div>
        </div>

        <div class="card">
            <img src="../Images_portfolio/git hub logo 2.jpg" alt="Git Hub" height="200px">

            <div class="card__content">
                <p class="card__title">Git Hub</p>
                <p class="card__description">GitHub est une plateforme de développement logiciel basée sur le cloud, principalement utilisée pour l'hébergement de code source et la gestion de versions à l'aide de Git.</p>
            </div>
        </div>

        <div class="card">
            <img src="../Images_portfolio/React.png" alt="React" height="200px">

            <div class="card__content">
                <p class="card__title">React</p>
                <p class="card__description">React est une bibliothèque JavaScript open-source développée par Facebook. Elle est utilisée pour la construction d'interfaces utilisateur interactives et évolutives.</p>
            </div>
        </div>
    </div>
    <br>

    <?php
    include 'footer.php';
    ?>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>