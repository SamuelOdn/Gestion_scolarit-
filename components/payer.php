<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include_once("../utils.php") ?> 
</head>
<body>  
    
    <main class="main-container">
        <img src="../images/riri.png" width="100%" alt="pay image">
        <form class="d-grid gap-2" action="payer.php" method="POST">
            <input type="hidden" name="field" value="test">
            <script
                src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
                data-public-key="pk_live_chp2duG09_lVm0UiNZMKdw5E"
                data-button-text="Procéder au payement"
                data-button-class="btn btn-primary btn-lg"
                data-transaction-amount="5000"
                data-transaction-description="Payement de vos frais de scolarité"
                data-currency-iso="XOF"
                data-widget-description="Votre système 100% efficace"
                data-widget-title="3D_RITA">
            </script>
        </form>
    </main>                    
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"></script>
</body>
</html>