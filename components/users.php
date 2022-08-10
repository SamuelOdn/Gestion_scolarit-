<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dasboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once("../utils.php");?> 
</head> 
<body>

<style>
    .tete{
        display: flex;
        justify-content: space-between;
    }
 .section2{
        
        display: none;
        height: 100vh;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.3);
        z-index: 9999999;
        position: absolute;
        top: 0;
        left: 0;
        margin-right: 50%;
    }

    .updateForm{
        display:none;
    }
    .addForm{   
        display:none;
    }
    .deleteForm{
        display:none;
    }
</style>

<script>

    function add() {
        document.querySelector(".section2").style.display="block";  
        document.querySelector(".addForm").style.display="block";
        document.querySelector(".updateForm").style.display="none"; 
        document.querySelector(".deleteForm").style.display="none"; 
        //alert("hello");
    }
    function update() {
        document.querySelector(".section2").style.display="block";
        document.querySelector(".updateForm").style.display="block";
        document.querySelector(".deleteForm").style.display="none";
        document.querySelector(".addForm").style.display="none";

        /*document.querySelector("#id").value = id ;
        document.querySelector("#lastName").value = lastName ;
        document.querySelector("#firstName").value = firstName ;
        document.querySelector("#email").value = email ;
        document.querySelector("#birthday").value = birthday ;*/
      
    } 
    function del(id) {
        document.querySelector(".section2").style.display="block";
        document.querySelector(".deleteForm").style.display="block";
        document.querySelector(".addForm").style.display="none";    
        document.querySelector(".updateForm").style.display="none";

        document.querySelector("#currentId").value = id ;
        //console.log(id); 
        
    }
</script>
<main>
<?php
    include_once("../Riri_pro/functions/functions.php");
    $chaine= '<table class="table">
    <div class="tete">
        <div class="fw-bold">LISTE DES ETUDIANTS AJOUTES</div>
        <button class="btn btn-primary text-end"  onclick="javascript:add()">+</button></div> 
    </div>
    <br/>
    <thead class="bg-primary text-light">
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nom </th>
        <th scope="col">Prénom</th>
        <th scope="col">Email</th>
        <th scope="col">Matricule</th>
        <th scope="col">Date de naissance</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>';
    $conn = Connexion();

    $req = "SELECT id_etudiant, nom, prenom, date_naissance, matricule, email, password FROM etudiant";

    $res = $conn->query($req);
    $tab = $res->fetchAll(); 
    foreach($tab as $ligne ){

        $chaine=$chaine."<tbody>
        <tr>
            <th scope='row'>$ligne[0]</th>
            <td>$ligne[1]</td>
            <td>$ligne[2]</td>
            <td>$ligne[5]</td>
            <td>$ligne[4]</td>
            <td>$ligne[3]</td>
            <td>         
                <i class='fas fa-edit me-2 text-warning fa-2x' onclick='javascript:update()'></i>  
                <i class='fas fa-trash-alt text-danger fa-2x ' onclick='javascript:del(id=".$ligne[0].")'></i>
            </td>
        </tr>
    </tbody>";
}
$chaine=$chaine.'</table>';
echo $chaine;
?>
    <section class="section2 vh-100">
      <div class="mask d-flex align-items-center h-100">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">

                  <form class="addForm" action="insert.php" method="POST">

                        <div class="form-outline mb-2">
                            <input type="text" name="nom" id="form3Example1cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1cg">Nom</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="text" name="prenom" id="form3Example3cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example3cg">Prénom</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="text"  name="email" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">email</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="date" name="Dnaissance" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">Date de naissance</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="number" name="matricule" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">Matricule</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                            <label class="form-label"  for="form3Example4cg">Mot de passe provisoire</label>
                        </div>
                        

                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-warning mb-0 me-2" role="button" href=""> Annuler</a>
                            <button type="submit" class="btn btn-primary" role="button">AJOUTER</button>
                        </div>

                  </form>

                  <form class="updateForm" action="updateUser.php" method="POST">

                        <div class="form-outline mb-2">
                            <input type="text" name="nom" id="lastName" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1cg">Nom</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="text" name="prenom" id="firstName" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example3cg">Prénom</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="text"  name="email" id="email" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">email</label>
                        </div>

                        <div class="form-outline mb-2">
                            <input type="date" name="Dnaissance" id="birthday" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example4cg">Date de naissance</label>
                        </div>
                            <input type="hidden" name="id" id="id" class="form-control form-control-lg" />

                        <div class="d-flex align-items-center justify-content-center">
                            <a class="btn btn-warning mb-0 me-2" role="button" href=""> Annuler</a>
                            <button type="submit" class="btn btn-success" role="button">Modifier</button>
                        </div>

                  </form>

                    <form class="deleteForm" action="deleteUser.php" method="POST">
                                <input type="hidden" name="id" id="currentId" class="form-control form-control-lg" value="" />
                                
                            <div class="form-outline mb-2">
                                <h4><i class="fas fa-ban fa-fw text-danger "></i> Êtes-vous sûr de vouloir supprimer ?</h4>
                            </div>

                            <div class="d-flex align-items-center justify-content-center">
                                <a class="btn btn-warning mb-0 me-2" role="button" href=""> NON</a>
                                <button type="submit" class="btn btn-success" role="button">OUI</button>
                            </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    </main>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
</body>
</html>