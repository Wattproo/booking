<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Hébergement-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
</head>
<body class="hebergement">
<nav class="navBar">
        <a href="" class="logo"><img src="photo/logoMada.jpg" alt="Logo"></a>
        <div class="navLinks">
            <ul>
                <li><a href="index.php?action=accueil">Acceuil</a></li>
                <li><a href="index.php?action=destination">Destination</a></li>
                <li><a href="index.php?action=offres">Offres</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>
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
                    <li><a href="index.php?action=logout">Se déconnecter</a></li>
                    <li><a href="index.php?action=login">changer de compte</a></li>
                </ul>
            </div>
        </div>
    </nav>
       
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