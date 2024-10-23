<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Déqtination-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
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
                    <a class="nav-link" href="index.php?action=accueil">accueil</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=destination">Déstination</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=hebergement">Hebergement</a>
                </li>
                <li>
                    <a class="nav-link active" href="index.php?action=contact">contact</a>
                </li>
            </ul>
            <div class="desconnect">
                <i class="fa fa-user"></i>
                <a href="#">Se Déconnecter</a>
            </div>
            <div class="form-inline">
                <form action="/action_page.php">
                    <input type="search" placeholder="Search" id="recherche">
                    <label for="recherche"><i class="fa fa-search"></i></label>
                </form>
            </div>
        </nav>
    </header>
    <div class=un><a href=""><img src="34436609610_bae0a770d5_k-e1496139102149.jpg" alt=""></a></div>
    <div class=deux><a href=""><img src="ampefy.jfif" alt=""></a></div>
    <div class=trois><a href=""><img src="Baobab-de-majunga.jpg" alt=""></a></div>
    <div class=quatre><a href=""><img src="bungalows-hotel-le-lagon-foulpointe-tamatave.jpg" alt=""></a></div>
    <div class=cinq><a href=""><img src="island-slide02.jpg" alt=""></a></div>
    <div class=six><a href=""><img src="Lagon-dIfaty-limite-par-un-recif-corallien.jpg" alt=""></a></div>
    <div class=sept><a href=""><img src="logoMada.jpg" alt=""></a></div>
    <div class=huit><a href=""><img src="mada-05.jpg" alt=""></a></div>
    <div class=neuf><a href=""><img src="Madagascar-Antananarivo-Adobe-2-e1646900799426.jpg" alt=""></a></div>
    <div class=dix><a href=""><img src="Madagascar-Antsirabe.png" alt=""></a></div>
    <div class=onze><a href=""><img src="quelle-meilleure-periode-aller-nosy-be-2.jpg" alt=""></a></div>
    <div class=douze><a href=""><img src="ville-de-toamasina.jpg" alt=""></a></div>
    <div class=treize><a href=""><img src="" alt="madagascar-anton-balahz.jpg"></a></div>
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
</body>
</html>