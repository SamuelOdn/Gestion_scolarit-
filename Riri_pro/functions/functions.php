<?php
//SamuelODUNLAMI 
function Connexion() {
   
    try {
        $user = "root";
        $pass = "";
        $conn =  new PDO('mysql:host=localhost;dbname=gestion_scolarite', $user, $pass);

        return $conn ;
    
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
}


function authentication($email , $password , $typeOfUser){
    $conn = Connexion();
    $req="";

    if($typeOfUser == "admin"){
        $req = "SELECT * FROM Admin WHERE email = '$email' AND password = '$password' ";
    }
    else if ($typeOfUser == "gestionnaire"){
        $req = "SELECT * FROM Gestionnaire  WHERE email = '$email' AND password = '$password' ";

    } else if ($typeOfUser == "etudiant") {
        $req = "SELECT * FROM Etudiant WHERE email = '$email' AND password = '$password' ";
    }

    $res = $conn -> query($req);

    if (  $res -> rowCount() == 1) {
        return "success";
    } 

}


function getUserByEmail ($email) {
    $conn = Connexion();
    $req = "SELECT * FROM User WHERE email = '$email' ";
    $res = $conn -> query($req);

    if ($row = $res->fetch(PDO::FETCH_ASSOC) ) {
        $nom = $row["nom"];
        $prenom = $row["prenom"];
    }
}



function addUser($nom ,$prenom, $dateN, $matricule, $email , $password ) {
    $conn = Connexion();

    $req = "INSERT INTO etudiant (nom, prenom, date_naissance, matricule, email, password) VALUES ('$nom' , '$prenom', '$dateN', '$matricule', '$email' , '$password' )";

    $res = $conn->query($req);
    
    if ($res) {
        return "success";
    }
    else
    {
        return "failure";
    }
}

function deleteUser($id) {
    $conn = Connexion();
    $req = "DELETE FROM etudiant WHERE id_etudiant = $id ";
    
    $res = $conn->query($req);
    
    if ($res) {
        return "success";
    }
    else
    {
        return "failure";
    }
}

function updateUser($nom ,$prenom,$email , $dateN, $id){
    $conn = Connexion();
    $req = "UPDATE etudiant SET nom = '$nom' , prenom = '$prenom' , email = '$email' , date_naissance = '$dateN' WHERE id_etudiant= '$id' ";
        $res = $conn->query($req); 
        if ($res) {
            return "success";
        }
        else
        {
            return "failure";
        }
}

function changePassword ($email , $oldPassword , $newPassword){
    $conn = Connexion();
    $req = "SELECT * FROM User WHERE email = '$email' ";
    $res = $conn -> query($req);
    while ($row = $res->fetch(PDO::FETCH_ASSOC) ) {
        $password = $row["password"];
    }

    if ($oldPassword == $password) {
        $request = "UPDATE etudiant SET password = '$newPassword' ";
        $result = $conn->query($request);
    
        if ($result) {
            return "success";
        }
        else
        {
            return "failure";
        }
    }
}

//CRUD GESTIONNAIRE
function addGestionnaire($email , $password) {
    $conn = Connexion();
    $req = "INSERT INTO gestionnaire (email , password) VALUES ('$email' , '$password' ) ";

    $res = $conn->query($req);
    if ($res) {
        return "success";
    }
    else
    {
        return "failure";
    }
}

function deleteGestionnaire($id) {
    $conn = Connexion();
    $req = "DELETE FROM gestionnaire WHERE id_Gestionnaire = $id ";
    
    $res = $conn->query($req);
    
    if ($res) {
        return "success";
    }
    else
    {
        return "failure";
    }
}


function pay ($libelle , $montantRestant , $montantTotal , $montantAPayer , $datePaiement , $statutPaiement) {

    $conn = Connexion();
    
    $req = "INSERT INTO paiement (libelle , montantRestant , montantTotal , montantAPayer , datePaiement , statutPaiement) VALUES ( $libelle , $montantRestant , $montantTotal , $montantAPayer , $datePaiement , $statutPaiement ) ";

    $res = $conn->query($req);
    if ($res) {
        return "success";
    }
    else
    {
        return "failure";
    }
}

function image(){
    return '<img src="../images/welcome.jpg" height="90%" width="100%" alt="Welcome image" />';
  }

?>