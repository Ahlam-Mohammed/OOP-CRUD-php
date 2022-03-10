<?php include 'components/header.php' ?>

<?php include 'template/wallet/deposit.php' ?>

<main>
    <?php if (isset($deposit->msg)) {?>
        <div class="alert alert-<?php if(array_keys($deposit->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>" style="position: absolute; bottom: 0; left: 1%;z-index:9" role="alert">
            <?php print_r(array_values($deposit->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="card rounded w-50">
            <div class="card-header">
                <h4 class="text-primary">Deposit In Your Wallet </h4>
            </div>
            <div class="card-body p-5">
                <?php include 'components/deposit-wallet.php'; ?>
            </div>
        </div>
    </div>
</main>

<?php include 'components/footer.php' ?>