<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Contact-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="views/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    <header>
        <p class="menuBar" onclick="afficheMenu()">
            <i class="fa fa-bars"> Menu</i>
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