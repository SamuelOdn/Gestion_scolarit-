<?php
session_start();
include_once("functions/functions.php");

if (isset($_POST['submit'])) {
    $login= $_POST['email'];
    $password = $_POST['password'];
    $typeOfUser = $_POST["typeOfUser"] ;

    $request =  authentication($login , $password , $typeOfUser);

    if ($request == "success") {
        $_SESSION["userConnected"] =  $login;
        $_SESSION["typeOfUser"] = $typeOfUser;
        $_SESSION["connected"] = 1 ;
        header('Location: ../users_dashboard.php');
    }
    else {
        $_SESSION["connected"] = 0;
        ?>
        <script>
            window.location.href = "../index.html"; 
            alert("quelque chose s'est mal passé");
        </script>
        <?php
    }
}

?>