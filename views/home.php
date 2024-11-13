<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="views/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="css/styleAcceuil.css">
    <title>Acceuil</title>
</head>
<body>
    <header>
        <div class="bgSpaceTop">
        </div>
        <nav>
            <div class="logo">
                <img src="photo/travelMada.png" alt="logo">
            </div>
            <ul class="navLinks">
                <li><a href="index.php?action=accueil">Acceuil</a></li>
                <li><a href="index.php?action=destination">Destination</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>
            </ul>
            <div class="btnMenu">
                <i class="fa fa-bars"></i>
            </div>
            <div class="desconnectBtn">
                <div class="desconnectBtnDesconnect">
                    <i class="fa fa-user"></i>
                </div>
                <div class="desconnectList">
                    <a href="#">Se déconnecter</a>
                    <a href="#">Se connecter</a>
                </div>
            </div>
        </nav>
        <div class="videoConteiner">
            <video src="video/diapo.mp4" autoplay="" loop="" muted=""></video>
            <div class="textParagraphe">
                <p>Organiser votre voyage de rêve</p>
                <a href="index.php?action=destination">Découvrir Plus</a>
            </div>
        </div>
    </header>
    <script>
        const btnMenu = document.querySelector(".btnMenu");
        const navLinks = document.querySelector(".navLinks");
        const barsX = document.querySelector(".fa-bars");

        const desconnectBtn = document.querySelector(".desconnectBtn");
        const desconnectList =document.querySelector(".desconnectList");

        btnMenu.addEventListener("click", () => {
            btnMenu.classList.toggle("open");
            barsX.classList.toggle("fa-bars");
            barsX.classList.toggle("fa-times");
            navLinks.classList.toggle("showDesconnectList");
        })

        desconnectBtn.addEventListener("click", () => {
            desconnectList.classList.toggle("showDesconnectListUl");
        })
    </script>
</body>
</html>