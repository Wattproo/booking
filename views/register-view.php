<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sigin-login.css">
    <title>INSCRIPTION-MADA_TRAVEL.com</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="publics/bootstrap-4.6.2-dist/css/bootstrap.css">
</head>
<body>
    <form action="index.php?action=register-membre" method="post">
        <div class="container">
            <h1>INSCRIPTION</h1>
            <div class="form-group">
                <label for="nom">NOM:</label>
                <input type="text" class="form-control" name="nom" required>
            </div>
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" name="prenom" required>
            </div>
            <div class="form-group">
                <label for="pseudo">votre pseudo:</label>
                <input type="text" class="form-control" name="pseudo" required>
            </div>
            <div class="form-group">
                <label for="email">Votre Adress Mail:</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="form-group">
                <label for="pwd">Votre mot de passe:</label>
                <input type="password" class="form-control"  name="pass1" required>
            </div>
            <div class="form-group">
                <label for="pwd">Confirmer Votre mot de passe:</label>
                <input type="password" class="form-control"  name="pass2" required>
            </div>
            <input type="submit" class="form-control" id="mavie" name="btnRegister" value="S'inscrire">
           
        </div>
        
    </form>
    <script src="bootstrap/js/bootstrap.js"></script>
</body>
</html>