<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleContact.css?v echo php ?>" type="text/css">
    <!-- <link rel="stylesheet" href="css/styleContact.css" type="text/css"> -->
    <link rel="stylesheet" href="css/nav.css">
    <title>Contact-MADA_TRAVEL.com</title>
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css"> -->
    <link rel="stylesheet" href="views/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="photo/travelMada.png" alt="logo">
            </div>
            <ul class="navLinks">
                <li><a href="#">Acceuil</a></li>
                <li><a href="#">Destination</a></li>
                <li><a href="#">Offres</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <form action="">
                <input type="serach" placeholder="Search...." id="recherche">
                <label for="recherche"><i class="fa fa-search"></i></label>
            </form>
            <div class="btnMenu">
                <i class="fa fa-bars"></i>
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
                        <p><i class="fa fa-phone-alt"></i></p>
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
    <footer>
    <div class="texte">
        <div class="texte1">
            <h5>L'AGENCE</h5>
            <p>Qui sommes-nous?</p>
            <p>Agence Web|Refonte de sites</p>
            <p>Agence Media|voyage,résérvation</p>
        </div>
        <div class="texte2">
            <h5>NOS CLIENTS</h5>
            <p>Cas Assurance & Mutuelle</p>
            <p>Voyageurs</p>
            <p>Avis clients</p>
        </div>
        <div class="texte3">
            <h5>RESTONS EN CONTACT</h5>
            <p><i class="fas fa-mail-bulk "> Email</i></p>
            <p><i class="fab fa-facebook"> Facebook</i></p>
            <p><i class="fab fa-youtube"> Youtube</i></p>
        </div>
    </div>
    <hr>
    <div class="pied">
        <p> &copy copyright site créer par "nous" </p>
    </div>

</footer>
    <script>
        const btnMenu = document.querySelector(".btnMenu");
        const navLinks = document.querySelector(".navLinks");
        const barsX = document.querySelector(".fa-bars");
        const navBar = document.querySelector("header");

        btnMenu.addEventListener("click", () => {
            btnMenu.classList.toggle("open");
            barsX.classList.toggle("fa-bars");
            barsX.classList.toggle("fa-times");
            navLinks.classList.toggle("showDesconnectList");
        })
        
        window.addEventListener("scroll", () => {
            if (window.scrollY > 50) {
                navBar.classList.add("hide");
            }else{
                navBar.classList.remove("hide");
            }
        })
    </script>
</body>
</html>