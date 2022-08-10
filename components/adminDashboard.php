<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once("../utils.php") ?> 
</head> 
<body>

<main class="main-container">
<section class="dashboard content live" id="content1">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>RECAPITULATIF DES SOLDES</strong></h5>
            </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prénom</th>
                            <th scope="col">Classe</th>
                            <th scope="col">Total Payé</th>
                            <th scope="col">Reste à Payer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Samuel</td>
                            <td>ODUNLAMI</td>
                            <td>L3</td>
                            <td><span class="badge rounded-pill badge-success">300000FCFA</span></td>
                            <td><span class="badge rounded-pill badge-danger">700000FCFA</span></td>
                        </tr>

                        <tr>
                            <th scope="row">2</th>
                            <td>Rita</td>
                            <td>DIBEKOU</td>
                            <td>L3</td>
                            <td><span class="badge rounded-pill badge-success">300000FCFA</span></td>
                            <td><span class="badge rounded-pill badge-danger">700000FCFA</span></td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>David</td>
                            <td>GABIAM</td>
                            <td>L3</td>
                            <td><span class="badge rounded-pill badge-success">300000FCFA</span></td>
                            <td><span class="badge rounded-pill badge-danger">700000FCFA</span></td>
                        </tr>
                     
                    </tbody>
                </table>
        </div>

    </section>
   
</main>
<!--End main-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
    
</body>
</html>