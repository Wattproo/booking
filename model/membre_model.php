<?php
class membre_model{
    private $bdd;
    private $email;

    public function __construct(){
        try {
            $this->bdd = new PDO("mysql:host=localhost;dbname=booking","root","");
        } catch (PDOException $e) {
            echo ("erreur de connexion au serveur!");
        }
    } 
    public function save($nom,$prenom,$pseudo,$email,$pass){
        $req = $this->bdd->prepare("INSERT INTO client(nom,prenom,pseudo,email,pass) VALUES (?,?,?,?,?)");
        $req->execute([$nom,$prenom,$pseudo,$email,$pass]);
    }
    public function verifyPseudo($pseudo){
        $req = $this->bdd->prepare("SELECT * FROM client WHERE pseudo=?");
        $req->execute([$pseudo]);
        return $req->rowCount();
    }
    public function confirmPseudoPass($pseudo,$pass){
        
    }
    public function verifyEmail($email){
        $req = $this->bdd->prepare("SELECT * FROM client WHERE email=:email");
        $req->bindParam(':email', $email, PDO::PARAM_STR).
        // return $req->rowCount();
        $req->execute($email);
    }
    public function deleteMember($id){
        $req = $this->bdd->prepare("DELETE FROM client WHERE id=?");
        $req->execute(['$id']);
    }
    public function selectAll(){
        $req = $this->bdd->query("SELECT * FROM client");
        return $req->fetchAll(PDO::FETCH_OBJ);
    }
    public function selectOne($pseudo){
        $req = $this->bdd->prepare("SELECT FROM client WHERE pseudo=?");
        $req->execute([$pseudo]);
        return $req->fecthAll(PDO::FETCH_OBJ);
    }
    public function updateInfo($nom,$prenom,$pseudo,$email,$id){
        $req = $this->bdd->prepare("UPDATE client SET nom=?, prenom=?, pseudo+?, email=? WHERE id=? ");
        $req->execute([$nom,$prenom,$pseudo,$email,$id]);
    }
}
