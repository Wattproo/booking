<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <link rel="stylesheet" href="nav.css">
    <title>Contact-MADA_TRAVEL.com</title>
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
    <section class="contact">
        <div class="leftHand">
            <h1>Contactez-nous</h1>
            <hr>
            <ul>
                <li>
                    <div class="conteinerLi">
                        <p><i class="fas fa-phone-alt"></i></p>
                        <div>
                            <h4>Téléphone</h4>
                            <p>+261 38 90 561 15</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="conteinerLi">
                        <p><i class="fa fa-globe"></i></p>
                        <div>
                            <h4>Site Web</h4>
                            <p>notresiteweb.com</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="conteinerLi">
                        <p><i class="fa fa-envelope"></i></p>
                        <div>
                            <h4>E-mail</h4>
                            <p>jonathanmamba03@gmail.com</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="conteinerLi">
                        <p><i class="fa fa-map-marker"></i></p>
                        <div>
                            <h4>Adresse</h4>
                            <p>Ambanidia</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="rightHand">
            <form action="">
                <label for="name">Nom & Prénom(s):</label>
                <input type="text" name="name" id="name">
                <label for="mail">E-mail:</label>
                <input type="email" name="mail" id="mail">
                <label for="tel">Numéro de téléphone:</label>
                <input type="tel" name="" id="">
                <label for="message">Votre message:</label>
                <textarea name="messageclient" id="message" cols="30" rows="5"></textarea>
                <input type="submit" value="Envoyer">
            </form>
        </div>
    </section>
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