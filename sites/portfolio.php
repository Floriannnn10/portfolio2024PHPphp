<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="stylee.css">
    <link rel="stylesheet" href="sites.css">
</head>

<body>

    <?php
    include 'navbar.php';
    ?>

    <br>
    <h1 class="prjt" style="text-align:center;">Mes Projets Réalisés</h1>
    <br><br>

    <!-- 1 -->
    <h2 class="pdev" style="text-align:center; text-decoration:underline;">Projet Dev</h2>
    <br><br>
    <div class="container" style="display:flex; justify-content:space-around; flex-wrap:wrap;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="https://floriannnn10.github.io/yango_web/">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-17 194340.png" alt="C.E-1" height="200px">
                    </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href=" https://floriannnn10.github.io/lian_dev/">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-17 201436.png" alt="C.E-2" height="200px">
                    </a>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="https://floriannnn10.github.io/exercice_de-_classe/">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-18 130951.png" alt="css" height="200px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <!-- 2 -->

    <div class="container" style="display:flex; justify-content:space-around; flex-wrap:wrap;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="http://localhost/Projet%20de%20PHP/Projet%20De%20PHP/Accueil.php">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-18 133945.png" alt="C.E-1" height="200px">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <br><br>
    <h2 class="pdev" style="text-align:center; text-decoration:underline;">Projet UI/UX</h2>
    <br><br>

    <!-- 1 -->
    <div class="container" style="display:flex; justify-content:space-around; flex-wrap:wrap;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="https://github.com/Floriannnn10/projet_ux_1">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-18 140916.png" alt="C.E-1" height="200px">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="#">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-18 131728.png" alt="C.E-1" height="235px" class="zoomable">
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="#">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-18 132337.png" alt="C.E-2" height="200px" class="zoomable">
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- 2 -->
    <div class="container" style="display:flex; justify-content:space-around; flex-wrap:wrap; margin-top:20px;">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <a href="#">
                        <img src="../Images_portfolio/Capture d’écran 2024-07-18 131853.png" alt="C.E-3" height="240px" class="zoomable">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Fullscreen Image Modal -->
    <div id="imageModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="modalImage">
    </div>

    <script>
        // script.js

        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('imageModal');
            var modalImg = document.getElementById('modalImage');
            var zoomableImages = document.querySelectorAll('.zoomable');
            var span = document.getElementsByClassName('close')[0];

            zoomableImages.forEach(function(image) {
                image.onclick = function() {
                    modal.style.display = 'block';
                    modalImg.src = this.src;
                }
            });

            span.onclick = function() {
                modal.style.display = 'none';
            }

            modal.onclick = function() {
                modal.style.display = 'none';
            }
        });
    </script>

    <br>

    <?php
    include 'footer.php';
    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>