<!DOCTYPE html>
<html lang="en">
<head>
        <title>Dashboard</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php include_once("../utils.php") ?> 
    </head>
<body>

    <section class="dashboard content live" id="content1">
        <div class="card mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0 text-center"><strong>HISTORIQUE DES PAYEMENTS</strong></h5>
            </div>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Date</th>
                        <th scope="col">A titre de:</th>
                        <th scope="col">Année académique</th>
                        <th scope="col">Montant</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>05/12/2021</td>
                        <td>Janvier</td>
                        <td>2021-2022</td>
                        <td>100000FCFA</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>05/01/2022</td>
                        <td>Février</td>
                        <td>2021-2022</td>
                        <td>100000FCFA</td>
                        </tr>

                        <tr>
                            <th scope="row">3</th>
                            <td>05/02/2022</td>
                            <td>Mars</td>
                            <td>2021-2022</td>
                            <td>100000FCFA</td>
                        </tr>
                        
                        <tr>
                        <th scope="row">Total Payé</th>
                        <td colspan="4" class="text-end fw-bold">300000FCFA</td>
                        </tr>

                        <tr>
                            <th scope="row">Reste à Payer</th>
                            <td colspan="4" class="text-center fw-bold text-danger">700000FCFA</td>
                            </tr>
                    </tbody>
                </table>
        </div>

    </section>
                <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script> 
</body>
</html>