<?php 
include_once("../Riri_pro/functions/functions.php");
$mail = $_POST['mail'];
$passwd = $_POST['pwd'];

if( $mail =="" || $passwd == ""){
    ?>
    <script>
        alert("Veuillez remplir tous les champs");
        window.location.href = "addGestionnaire.php"; 
    </script>
    <?php
}
else{
    addGestionnaire($mail , $passwd);
    header('Location: addGestionnaire.php');
}

?>