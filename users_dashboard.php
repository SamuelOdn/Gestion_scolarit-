<?php

    session_start();
    $connected = $_SESSION["connected"];
    
    if ($connected != 1) {
        header('Location: index.html');
    }


?>


<!DOCTYPE html>
<html>
    <head>
        <title>userDasboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
        <?php include_once("utils.php") ?>   
    </head>
    <body>
        <div class="grid-container">
            <!--Header-->
            <header style="padding: 0 2%;" class="header">
                <div class="header-left">
                    <div class="input-group mt-3">
                        <div class="form-outline">
                          <input type="search" id="form1" class="form-control" />
                          <label class="form-label" for="form1">Search</label>
                        </div>
                        <button type="button" class="btn btn-primary">
                          <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="header-right mt-3">
                    <ul class="one">
                        <li><i class="far fa-bell fa-2x  me-2"></i></li>
                        <li><i class="fas fa-user-circle fa-2x"></i>
                        <ul>
                            <li> <a href="">Modifier mot de passe</a> </li>
                            <li><a href="">Paramètres</a></li>
                            <li><a href="Riri_pro/disconnect.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                    </ul> 
                </div>

            </header>
            <!--End Header-->

            <!--Sidebar-->
            <aside id="sidebar">
                <div style="height:8%;display:flex;justify-content:center;align-items:center" class="sidebar-title">
                    <div class="sidebar-logo">
                        <span class="brand"><i class="fas fa-signature fa-2x text-light"></i>RITA</span>
                    </div>
                </div>

                <div class="sidebar-list">
                    <a id="welcome"  href="#" class="dashboard list-group-item list-group-item-action py-2 ripple active" aria-current="true">
                        <i class="fas fa-home fa-fw me-1" ></i><span> Accueil </span>
                    </a>
                    <a id="dashboard"  href="#" class="dashboard list-group-item list-group-item-action py-2 ripple " aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-1" ></i><span>Tableau de bord </span>
                    </a>
                   
                    <a id="adminDashboard"  href="#" class="dashboard list-group-item list-group-item-action py-2 ripple "  aria-current="true">
                        <i class="fas fa-tachometer-alt fa-fw me-1" ></i><span> Tableau de bord </span>
                    </a>
                    <a id="users"  href="#" class="dashboard list-group-item list-group-item-action py-2" aria-current="true">
                        <i class="fas fa-users fa-fw me-1" ></i><span> Gérer Utilisateurs </span>
                    </a>
                    <a id="addGestionnaire"  href="#" class="dashboard list-group-item list-group-item-action py-2 ripple " aria-current="true">
                        <i class="fas fa-caret-right fa-fw pe-1"></i><span>Ajouter un gestionnaire</span>
                    </a>
              
                     <a  href="#" id="pay" class="payer list-group-item list-group-item-action py-2 " aria-current="true">
                        <i class="fas fa-money-check-alt pe-2"></i><span>Payer la scolarité</span>
                    </a>
                    
                    <a id="print" href="#" class="list-group-item list-group-item-action py-2 " aria-current="true">
                    <i class="fas fa-print pe-2"></i><span>Imprimer un reçu</span>
                    </a>
                    <a href="Riri_pro/disconnect.php" type="submit" class="list-group-item list-group-item-action py-2 " aria-current="true">
                    <i class="fas fa-sign-out-alt pe-2"></i><span>Se déconnecter</span>
                    </a>  
                </div>

            </aside>

            <!--End Sidebar-->

            <!-- main-->
            <main class="main-container">
                <iframe src="components/welcome.php" style="background:white;padding:2%;overflow:auto;height:100%;" width="100%" frameborder="0"></iframe>
            </main>
            <!--End main-->

        </div>

        <!--navbar-->
        
        <!--navbar-->

        <!-- MDB -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
        <!--script src="js/index.js"></script-->
    </body>
</html>

<script>

    document.getElementById("welcome").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/welcome.php";
    })

    document.getElementById("pay").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/payer.php";
    })
    document.getElementById("print").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/print.php";
    })
    document.getElementById("dashboard").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/dashboard.php";
    })
    document.getElementById("users").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/users.php";
    })
    document.getElementById("adminDashboard").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/adminDashboard.php";
    })

    document.getElementById("addGestionnaire").addEventListener('click', ()=>{
        document.querySelector("iframe").src = "components/addGestionnaire.php";
    })

  

</script>

<?php
    $typeOfUser = $_SESSION["typeOfUser"];  

    if ($typeOfUser == "etudiant") {
        ?>
               <script>
                     document.getElementById("users").style.display = "none";
                     
                     document.getElementById("addGestionnaire").style.display = "none";
                     document.getElementById("adminDashboard").style.display = "none";
               </script>    
        <?php
     
    }
    else if ($typeOfUser == "admin") {
        ?>
               <script>
                     document.getElementById("dashboard").style.display = "none";
                     document.getElementById("pay").style.display = "none";
                     document.getElementById("print").style.display = "none";
               </script>    
        <?php       
     
    }  else if ($typeOfUser == "gestionnaire") {
        ?>
               <script>
                     document.getElementById("addGestionnaire").style.display = "none";
                     document.getElementById("pay").style.display = "none";
                     document.getElementById("print").style.display = "none";
                     document.getElementById("users").style.display = "none";
                     document.getElementById("dashboard").style.display = "none";
               </script>    
        <?php
     
    }
?>