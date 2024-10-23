<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Accueil-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
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
                    <a class="nav-link" href="index.php?action=accueil">Accueil</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=destination">Déstination</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=hebergement">Hebergement</a>
                </li>
                <li>
                    <a class="nav-link active" href="index.php?action=contact">Contact</a>
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