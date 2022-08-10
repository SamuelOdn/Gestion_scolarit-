<?php 
include_once("../Riri_pro/functions/functions.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateN = $_POST['Dnaissance'];
$matricule = $_POST['matricule'];
$email = $_POST['email'];
$password = $_POST['password'];

if($nom =="" || $prenom =="" || $dateN =="" || $matricule =="" || $email =="" || $password == ""){
    ?>
    <script>
        alert("Veuillez remplir tous les champs");
        window.location.href = "users.php"; 
    </script>
    <?php
}
else{
    addUser($nom ,$prenom, $dateN, $matricule, $email , $password);
    header('Location: users.php');
}

?>