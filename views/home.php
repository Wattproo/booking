<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="nav.css" type="text/css">
    <!-- <link rel="stylesheet" href="destination.css" type="text/css"> -->
    <title>Accueil-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="views/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
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
    <header>

    </header>
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
</body>
</html>