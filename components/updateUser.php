<?php 
include_once("../Riri_pro/functions/functions.php");
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$dateN = $_POST['Dnaissance'];
$email = $_POST['email'];
$id = $_POST['id'];

if($nom =="" || $prenom =="" || $dateN =="" || $email =="" || $id=""  ){
    ?>
    <script>
        alert("Veuillez remplir tous les champs");
        window.location.href = "users.php"; 
    </script>
    <?php
}
else{
    updateUser($nom, $prenom, $email, $dateN, $id);
    header('Location: users.php');
}

?>