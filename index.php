<?php
if(isset($_GET["action"])){
    if ($_GET["action"]=="formation") {
        include("view/formation.php");
    }elseif($_GET["action"]=="article"){
        include("view/article.php");
    }elseif($_GET["action"]=="contact"){
        include("view/contact.php");
    }elseif($_GET["action"]=="home"){
        include("view/home.php");
    }
}else{
    include("view/home.php");
}









?>