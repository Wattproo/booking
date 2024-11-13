<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reservation.css" class="text/css">
    <link rel="stylesheet" href="views/fontawesome-free-5.15.3-web/css/all.css">
    <title>AGI</title>
</head>
<body>
   <header>
    <div class="nav">
        <img src="photo/travelMada.png" alt="logoMADATRAVEL" class="logo">
        <p><a href="index.php?action=acceuil" >Accueil</a></p>
        <p><a href="index.php?action=destination" id="Accueil">Réservation</a></p>
        <p><a href="index.php?action=contact">Contact</a></p>
        <p><a href="#"><i class="fas fa-shopping-cart"></i></a></p>
    </div>
   </header>
    <section>
        <div class="contenaire">
            <div class="input1">
                <form action="" method="post">
                    <i class="fa fa-user"></i>
                    <input type="text" name="personne" placeholder="nombre de personne">
                </form>
            </div>
            <div class="input1">
                <form action="" method="post">
                    <i class="fa fa-calendar"></i>
                    <input type="text" name="DA" placeholder="date d'arrivé">
                </form>
            </div>
            <div class="input1">
                <form action="" method="post">
                    <i class="fa fa-calendar"></i>
                    <input type="text" name="DP" placeholder="nombre de départ">
                </form>
            </div>
            <div class="input2">
                <form action="" method="post">
                    <input type="submit" value="Réserver" id="btn">
                </form>
            </div>
        </div>
    </section>
</body>
</html>