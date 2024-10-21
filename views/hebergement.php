<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>logo</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">

            <ul class="navbar-nav">
                <a class="navbar-brand" href="#">
                    <img src="logoMada.jpg" alt="Logo" style="width: 70px; border-radius: 50%;">
                </a>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=accueil">accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=destination">Destination</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="index.php?action=hebergement">Hebergement</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?action=contact">Contact</a>
                </li>
            </ul>
            <form class="form-inline" action="/action_page.php">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-warning" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>Se Déconnecter</a></li>
            </ul>

        </nav>
    </header>
</body>
</html>