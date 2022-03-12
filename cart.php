<?php include 'components/header.php' ?>

<main class="p-5">
    <?php if (isset($cart->msg)) {?>
        <div class="alert alert-<?php if(array_keys($cart->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($cart->msg)[0]) ?>
        </div>
    <?php } ?>
    <?php if (isset($withdraw->msg)) {?>
        <div class="alert alert-<?php if(array_keys($withdraw->msg)[0] == 'success') echo 'success'; else echo 'danger' ?>"  role="alert">
            <?php print_r(array_values($withdraw->msg)[0]) ?>
        </div>
    <?php } ?>
    <div class="container-lg table-responsive">
        <table class="table  table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Price</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                <?php include 'components/item-cart.php' ?>
            </tbody>
        </table>
    </div>
</main>

<!-- Modal confirm the order -->
<?php include 'Modals/wthdraw-wallet.php'; ?>

<!-- Modal confirm the empty cart -->
<?php include 'Modals/emptyCart.php'; ?>

<?php include 'components/footer.php' ?>