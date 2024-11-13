<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css" type="text/css"> -->
    <link rel="stylesheet" href="css/destination.css" type="text/css">
    <link rel="stylesheet" href="css/nav.css?v echo php?>">
    <title>Destination-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="views/fontawesome-free-5.15.3-web/css/all.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="photo/travelMada.png" alt="logo">
            </div>
            <ul class="navLinks">
                <li><a href="index.php?action=accueil">Acceuil</a></li>
                <li><a href="index.php?action=destination">Destination</a></li>
                <li><a href="index.php?action=contact">Contact</a></li>
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
    <div class="container">
        <h1>Idée de destinatin pour vous</h1>
<br>
<br>
        <div class="destination-grid">
            <div class="destination">
                <img src="photo/Antsirabe1.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=antsirabe">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/Foulpointe.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=foulpointe">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/Diego1.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=diego">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/IMG_9443.JPG" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=tamatave">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/Mahajanga1.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=majunga">Découvrir</a></button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
<br>
<br>
        <div class="destination-grid">
            <div class="destination">
                <img src="photo/Morondava1.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=morondava">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/Nosy Be.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=nosybe">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/tana.jpg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=tana">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/St Marie.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=stmarie">Découvrir</a></button>
                </div>
            </div>
            <div class="destination">
                <img src="photo/Tuléar.jpeg" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=tulear">Découvrir</a></button>
                </div>
            </div>
            
        </div>
    </div>
    <div class="destination" id="faire">
                <img src="photo/Ampefy.JPG" alt="">
                <div class="overlay">
                <button class="discover-btn"><a href="index.php?action=ampefy">Découvrir</a></button>
                </div>
            </div>

   
<br>
<br>

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