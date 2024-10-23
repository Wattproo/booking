<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="destination.css" type="text/css">
    <title>Destination-MADA_TRAVEL.com</title>
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
                    <a class="nav-link" href="index.php?action=accueil">Accueil</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=destination">Destination</a>
                </li>
                <li>
                    <a class="nav-link" href="index.php?action=hebergement">Offres</a>
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

<div class="destination">
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="morondava.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ L'incroyable allée des Baobab ♥</p>
        <a href="index.php?action=morondava" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="ampefy.jfif" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ Un paysage calme et paisible ♥</p>
        <a href="index.php?action=ampefy" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="majunga.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ Baobab, l'arbre mythique de Majunga ♥</p>
        <a href="index.php?action=majunga" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="foulpointe.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ La richesse de la faune et de la flore ♥</p>
        <a href="index.php?action=foulpointe" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="tulear.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title"style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ Les sables Blancs vous attend ♥</p>
        <a href="index.php?action=tulear" class="btn btn-primary">See Profile</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="diego.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:orange; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ La ville francophile, pleine d'histoire ♥</p>
        <a href="index.php?action=diego" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="tana.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ La capitale surprenante ♥</p>
        <a href="index.php?action=tana" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="antsirabe.png" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;" >♥ La ville des produits laitiers ♥</p>
        <a href="index.php?action=antsirabe" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="nosybe.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:orange; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ La plage de vos rêves ♥</p>
        <a href="index.php?action=nosybe" class="btn btn-primary" style="bottom: 10px;">Découvrir</a>
    </div>
    </div>
    <div class="card dest" style="width:500px" id="moi">
    <img class="card-img-top" src="tamatave.jpg" alt="Card image">
    <div class="card-img-overlay">
        <h4 class="card-title" style="color:greenyellow; font-family: 'Arial', sans-serif;">MADA_TRAVEL.com</h4>
        <p class="card-text" style="color:#fff; font-family: 'Arial', sans-serif;">♥ La ville haute en couleurs ♥</p>
        <a href="index.php?action=tamatave" class="btn btn-primary">Découvrir</a>
    </div>
    </div>
</div>
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