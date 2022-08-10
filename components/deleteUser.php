<?php 
include_once("../Riri_pro/functions/functions.php");
$_id = $_POST['id'];

if($_id ==""){
    ?>
    <script>
        alert("id inconnue");
        window.location.href = "users.php"; 
    </script>
    <?php
}
else{
    deleteUser($_id);
    header('Location: users.php');
}

?>