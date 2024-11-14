<?php
session_start();
if(isset($_GET["action"])){  
    if($_GET["action"]=="login"){
        include("views/login-view.php");
        if (isset($_POST['soumettre'])) {
            include("model/membre_model.php");
            $cc= new membre_model();
            $cc->verifyEmail(); 
            include("views/reserver.php");                 
        }else{
            //redirection
            header: 'location:index.php?action=login';
        }
    }elseif ($_GET["action"]=="offres") {
        include("views/offres.php");
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
            include("views/reserver.php"); 
        }else{
            include("register-view.php");
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
    }elseif($_GET["action"]=="morondava"){
        include("views/morondava.php");
    }elseif($_GET["action"]=="ampefy"){
        include("views/ampefy.php");
    }elseif($_GET["action"]=="majunga"){
        include("views/majunga.php");
    }elseif($_GET["action"]=="foulpointe"){
        include("views/foulpointe.php");
    }elseif($_GET["action"]=="tulear"){
        include("views/tulear.php");
    }elseif($_GET["action"]=="diego"){
        include("views/diego.php");
    }elseif($_GET["action"]=="tana"){
        include("views/tana.php");
    }elseif($_GET["action"]=="antsirabe"){
        include("views/antsirabe.php");
    }elseif($_GET["action"]=="nosybe"){
        include("views/nosybe.php");
    }elseif($_GET["action"]=="tamatave"){
        include("views/tamatave.php");
    }elseif($_GET["action"]=="stmarie"){
        include("views/stmarie.php");
    }elseif($_GET["action"]=="ravintsaraoffre"){
        include("vue-hotel/nosybe-offre/ravintsara/ravintsara_offre.php");
    }elseif($_GET["action"]=="exoraoffre"){
        include("vue-hotel/nosybe-offre/exora/exora_offre.php");
    }elseif($_GET["action"]=="gboffre"){
        include("vue-hotel/nosybe-offre/grandBleu/grandBleu_offre.php");
    }elseif($_GET["action"]=="biraoffre"){
        include("vue-hotel/antsirabe-offre/biraHotel/biraHotel_offre.php");
    }elseif($_GET["action"]=="mahafayoffre"){
        include("vue-hotel/antsirabe-offre/mahafayHotel/mahafayhotel_offre.php");
    }elseif($_GET["action"]=="suimangaoffre"){
        include("vue-hotel/antsirabe-offre/suimanga/suimanga_offre.php");
    }elseif($_GET["action"]=="reserver"){
        include("views/home-view.php");
    }elseif($_GET["action"]=="Baobaboffre"){
        include("vue-hotel/Mahajanga-offre/Baobab/Baobab.php");
    }elseif($_GET["action"]=="Papsoffre"){
    include("vue-hotel/Mahajanga-offre/Papschambre/Paps.php");
    }elseif($_GET["action"]=="Antsanitiaoffre"){
        include("vue-hotel/Mahajanga-offre/Antsanitia/Antsanitia.php");
    }elseif($_GET["action"]=="Papsoffre"){
        include("vue-hotel/Mahajanga-offre/Baobab/Paps.php");
    }elseif($_GET["action"]=="Métisoffre"){
        include("vue-hotel/Toliary-offre/Aux 2 métis/Métis.php");
    }elseif($_GET["action"]=="Serenaoffre"){
        include("vue-hotel/Toliary-offre/Serena Village/Serena.php");
    }elseif($_GET["action"]=="Villaoffre"){
        include("vue-hotel/Toliary-offre/Villa Claire/Villa.php");
    }elseif($_GET["action"]=="chezjeanneoffre"){
        include("vue-hotel/ampefy-offre/chezJeanne/chezJeanne_offre.php");
    }elseif($_GET["action"]=="cocodyoffre"){
        include("vue-hotel/ampefy-offre/cocodyroc/cocodyEoc_offre.php");
    }elseif($_GET["action"]=="ecoleoffre"){
        include("vue-hotel/ampefy-offre/ecoleLodge/ecoleLoge_offre.php");
    }elseif($_GET["action"]=="radisoffre"){
        include("vue-hotel/Antananarivo-offre/Radisson/Radisson.php");
    }elseif($_GET["action"]=="grandhoteloffre"){
        include("vue-hotel/Antananarivo-offre/Grandhotel/Grandhotel.php");
    }elseif($_GET["action"]=="urbanoffre"){
        include("vue-hotel/Antananarivo-offre/Varangue/Varangue.php");
    }elseif($_GET["action"]=="grhoffre"){
        include("vue-hotel/Antsiranana-offre/Grand-hotel/Grandhotel.php");
    }elseif($_GET["action"]=="ramenaoffre"){
        include("vue-hotel/Antsiranana-offre/Hotel lakana Ramena/Hotellakana.php");
    }elseif($_GET["action"]=="royaloffre"){
        include("vue-hotel/Antsiranana-offre/Royal Sakalava/Royal.php");
    }elseif($_GET["action"]=="cigaleoffre"){
        include("vue-hotel/foulpointe-offre/laCigale/laCigale_offre.php");
    }elseif($_GET["action"]=="lagonoffre"){
        include("vue-hotel/foulpointe-offre/leLagon/leLagon_offre.php");
    }elseif($_GET["action"]=="sanctoffre"){
        include("vue-hotel/foulpointe-offre/theSanctuary/theSanctuary_offre.php");
    }elseif($_GET["action"]=="cafeoffre"){
        include("vue-hotel/morondava-offre/baobabcafe/baobabCafe_offre.php");
    }elseif($_GET["action"]=="gunaoffre"){
        include("vue-hotel/morondava-offre/lagunaBeach/lagunaBeach_offre.php");
    }elseif($_GET["action"]=="capoffre"){
        include("vue-hotel/morondava-offre/capKimony/capKimony_offre.php");
    }elseif($_GET["action"]=="ibeachoffre"){
        include("vue-hotel/stMarie-offre/idylleBeach/idylleBeach.php");
    }elseif($_GET["action"]=="rocheroffre"){
        include("vue-hotel/stMarie-offre/leRocher/lerocher.php");
    }elseif($_GET["action"]=="samoffre"){
        include("vue-hotel/stMarie-offre/Samaria/samaria.php");
    }elseif($_GET["action"]=="caloffre"){
        include("vue-hotel/Toamasina-offre/Calypso/Calypso.php");
    }elseif($_GET["action"]=="streamoffre"){
        include("vue-hotel/Toamasina-offre/Streamliner/Streamliner.php");
    }elseif($_GET["action"]=="vicoffre"){
        include("vue-hotel/Toamasina-offre/Victoria/Victoria.php");
    }
    
}else{
    include("views/home.php");
    
}

?>