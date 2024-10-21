<?php

if(isset($_GET["action"])){
    if($_GET["action"]=="login"){
        include("views/login-view.php");
        if (isset($_POST['soumettre'])) {
            include("model/membre_model.php");
            $cc= new membre_model();           
            if ($_SERVER["REQUEST_METHOD"]){
                $email= $_POST['email'];
                $cc->verifyEmail($email);
                if($req->rowCount() > 0 ){
                    echo "vous êtes connecté";
                    include("views/home.php");
                }else{
                    echo "l'adresse e-mail n'existe pas!!";
                }
            }else{
                //redirection
                header('location:index.php?action=login');
            }

        }
    }elseif ($_GET["action"]=="hebergement") {
        include("views/hebergement.php");
    }elseif($_GET["action"]=="destination"){
        include("views/destination.php");
    }elseif($_GET["action"]=="contact"){
        include("views/contact.php");
    }elseif($_GET["action"]=="accueil"){
        include("views/home.php");
    }elseif ($_GET["action"]=="register") {
        include("views/register-view.php");
    }elseif ($_GET["action"]=="register-membre") {
        if(isset($_POST["btnRegister"])){
            require_once("controlleur/membre.php");
            $m= new membre ();
            $m->enregistrer($_POST["nom"],$_POST["prenom"],$_POST["pseudo"],$_POST["email"],$_POST["pass1"],$_POST["pass2"]);
            include("views/home.php");
        }
    }elseif($_GET["action"]=="accueil"){
        if(isset($_SESSION['pseudo'])){
            include("views/home.php");
        }else{
            header("location:index.php");
        }
        
    }elseif($_GET["action"]=="logout"){
        session_destroy();
        header("location:index.php");
    }
    // elseif($_GET["action"]=="liste"){
    //     require_once("models/membre_model.php");
    //     $mm = new membre_model(); 
    //     include("views/list-view.php");
    // }
    elseif($_GET["action"]=="profil"){
        require_once("models/membre_model.php");
        $mm = new membre_model(); 
        include("views/profil-view.php");
    }
    
}else{
    session_start();
    include("views/home-view.php");
    
}

?>