<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="nav.css">
    <title>Hébergement-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
</head>
<body class="hebergement">
<nav class="navBar">
        <a href="" class="logo"><img src="logoMada.jpg" alt="Logo"></a>
        <div class="navLinks">
            <ul>
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Offres</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <form action="" class="searchBar">
            <input type="search" id="recherche" placeholder="Search">
            <label for="recherche"><i class="fa fa-search"></i></label>
        </form>
        <div class="menuHumberger"><i class="fa fa-bars"></i></div>
        <div class="desconnectButton">
            <i class="fa fa-user"></i>
            <div class="desconnectList">
                <ul>
                    <li><a href="#">Se déconnecter</a></li>
                    <li><a href="#">Se connecter</a></li>
                </ul>
            </div>
        </div>
    </nav>
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
         
        <script>
        const menuHumberger = document.querySelector(".menuHumberger");
        const navLinks = document.querySelector(".navLinks");
        const desconnectButton = document.querySelector(".desconnectButton");
        const desconnectList = document.querySelector(".desconnectList");
        
        menuHumberger.addEventListener("click", () => {
            navLinks.classList.toggle("mobileMenu");
        })

        desconnectButton.addEventListener("click", () => {
            desconnectList.classList.toggle("showDesconnectList");
        })
    </script>
    <script src="heberge.js"></script>
</body>
</html>