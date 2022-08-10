<?php 
include_once("../Riri_pro/functions/functions.php");
$_id = $_POST['id'];

if($_id =="" || empty($_id)){
    ?>
    <script>
        alert("id inconnue");
        window.location.href = "addGestionnaire.php"; 
    </script>
    <?php
}
else{
    deleteGestionnaire($_id);
    header('Location: addGestionnaire.php');
}

?>