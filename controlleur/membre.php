<?php
require_once 'model/membre_model.php';
class membre{

    public function enregistrer($nom,$prenom,$pseudo,$email,$pass1,$pass2){
        $nom = htmlspecialchars(trim($_POST['nom'] ));
        $prenom = htmlspecialchars(trim($_POST['prenom']));
        $pseudo = htmlspecialchars(trim($_POST['pseudo']));
        $email = htmlspecialchars(trim($_POST['email']));
        $pass1 = htmlspecialchars(trim($_POST['pass1'])); 
        $pass2 = htmlspecialchars(trim($_POST['pass2']));
        if($nom!="" && $prenom!="" && $pseudo!="" && $pass1!="" && $pass2!=""){
            require_once("model/membre_model.php");
            $mm = new membre_model();
            if($mm->verifyPseudo($pseudo)==0){
                if($mm->verifyEmail($email)==0){
                    if($pass1==$pass2){
                        /*
                        $nom!="" -> veut dire : verifier que les champs soient bien remplis
                        sha1 = cripter le mots de passe
                        */ 
                        $pass1 = sha1($pass1);
                        $mm->save($nom,$prenom,$pseudo,$email,$pass1);
                        $_SESSION['pseudo']= $pseudo;
                        header("location:index.php?action=accueil");
                    }else{
                        header("location:index.php?action=register&retour=pass");
                    }
                }else{
                    header("location:index.php?action=register&retour=email");
                }
            }
        }else {
            echo "Veuillez remplir les champs";
            header("location:index.php?action=register-membre");
        }
    }
}