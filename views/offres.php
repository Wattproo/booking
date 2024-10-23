<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Hébergement-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
</head>
<body class="hebergement">
    <header>
        <p class="menuBar" onclick="afficheMenu()">
            <i class="fa fa-bars"></i>
        </p>
        <nav class="navBar" bg="#016ac6">
            <div class="navLogo">
                <img src="logoMada.jpg" alt="Logo">
            </div>
            <ul class="navLinks">
                <li>
                    <a class="nav-link" href="index.php?action=accueil">Accueil</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=destination">Destination</a>
                </li>
                <li>
                    <a class="nav-link active" href="index.php?action=ofres">Offres</a>
                </li>
                <li>
                    <a class="nav-link " href="index.php?action=contact">Contact</a>
                </li>
            </ul>
            <div class="desconnect">
                <i class="fa fa-user"></i>
                <a href="index.php?action=logout" onclick="survorl()">Se Déconnecter</a>
            </div>
            <div class="form-inline">
                <form action="/action_page.php">
                    <input type="search" placeholder="Search" id="recherche">
                    <label for="recherche"><i class="fa fa-search"></i></label>
                </form>
            </div>
        </nav>
    </header>
    <section>

        <!-- Container for the image gallery -->
        <div class="container">

            <!-- Full-width images with number text -->
            <div class="mySlides">
            <div class="numbertext">1 / 5</div>
                <img src="vuepiscine.jpg" style="width:100%">
            </div>

            <div class="Slides">
            <div class="numbertext">2 / 5</div>
                <img src="chambre1.web"  style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">3 / 5</div>
                <img src="piscineExora.jpeg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">4 / 5</div>
                <img src="tableExora.jpg" style="width:100%">
            </div>

            <div class="mySlides">
            <div class="numbertext">5 / 5</div>
                <img src="plage_entrevu.webp" style="width:100%">
            </div>
            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Image text -->
            <div class="caption-container">
            <p id="caption"></p>
            </div>

            <!-- Thumbnail images -->
            <div class="row">
            <div class="column">
            <img class="demo cursor" src="vuepiscine.jpg" style="width:100%" onclick="currentSlide(1)" alt="la vue">
            </div>
            <div class="column">
                <img class="demo cursor" src="chambre1.webp" style="width:100%" onclick="currentSlide(2)" alt="piscine">
            </div>
            <div class="column">
                <img class="demo cursor" src="piscineExora.jpeg" style="width:100%" onclick="currentSlide(3)" alt="dressage">
            </div>
            <div class="column">
                <img class="demo cursor" src="tableExora.jpg" style="width:100%" onclick="currentSlide(4)" alt="elcaboussement">
            </div>
            <div class="column">
                <img class="demo cursor" src="plage_entrevu.webp" style="width:100%" onclick="currentSlide(5)" alt="chambre">
            </div>
        </div>
         
    </section>
        <!-- Script JS -->
        <script>
        let navBar = document.querySelector(".navBar");
        let menuBar = document.querySelector(".menuBar");
        let form = document.querySelector(".form-inline")
        let desconnect = document.querySelector(".desconnect");
        function afficheMenu () {
            navBar.classList.toggle("afficheMenu");
            // form.style.position = "absolute";
            // form.style.width = "25%";
            // form.style.right = "2px";
            desconnect.style.width = "15%";
            desconnect.style.padding = "0px";
            desconnect.style.textAlign = "center";
        }
        function survol() {
            desconnect.classList.toggle("survol");
        }
    </script>
    <script src="heberge.js"></script>
</body>
</html>